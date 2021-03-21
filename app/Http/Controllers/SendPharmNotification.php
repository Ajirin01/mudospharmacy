<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use DB;
use App\ProductModel;
use Illuminate\Support\Facades\Redirect;
use Darryldecode\Cart\Cart\getPriceSub;
use App\Mail\SendPharmaNotificationMail as sendNotification;
use	Illuminate\Support\Facades\Mail;
use App\Http\Controllers\str_random;
use Illuminate\Support\Str;
use Session;

class SendPharmNotification extends Controller
{
    public function send(Request $request){
        $product_info=DB::table('tbl_products')
            ->where('product_id', $request->drug_id)
            ->first();
        // echo response()->json($request->all());
        $host = $_SERVER['HTTP_HOST'];
        $data = array(
            'email' => $request->email,
            'item_id' => $product_info->product_id,
            'item_name' => $product_info->product_name,
            'prescription' => 'confirmed',
            'host' => $host
        );
        Session::put('host',$host);
        Session::put('request_email',$request->email);
        Session::put('request_item_id', $product_info->product_id);
        Session::put('request_item_mame', $product_info->product_name);
        Session::put('request_prescription', $data['prescription']);
        $presc=array();
        $image=$request->file('prescription_file');

        if($image){
            $image_name=str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.','.$ext;
            $upload_path='images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if($success){
                $presc['product_name']=$product_info->product_name;
                $presc['prescription_image']=$image_url;
                // echo "teue";
                DB::table('prescription')->insert($presc);
                Mail::send(new sendNotification($data));
                // echo response()->json($data);
                return redirect()->back()->with([$product_info, 'code'=>301]);
            }
        }
        // $data['product_image']='';
        // DB::table('tbl_products')->insert($data);
        
    }

    public function prescription_list(){
        $prescriptions = DB::table('prescription')
                            ->get();
        return view('admin.prescription_list',['prescriptions'=> $prescriptions]);
    }

    public function view_prescription($id){
        $prescription = DB::table('prescription')
                            ->where('prescription_id', $id)
                            ->get();
        return view('admin.view_prescription',['prescription'=> $prescription, 'req_prescription'=>Session::get('request_prescription'), 'email'=>Session::get('request_email'), 'host'=>Session::get('host'), 'item_id'=>Session::get('request_item_id'), 'item_name'=>Session::get('request_item_name')]);
    }
    public function delete_prescription($id){
        DB::table('prescription')
        ->where('prescription_id',$id)
        ->delete();
        Session::put('message','Prescription was successfully deleted!');
        return Redirect::to('/prescription-list');
    }
}
