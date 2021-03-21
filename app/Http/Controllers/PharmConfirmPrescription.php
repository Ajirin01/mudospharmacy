<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use DB;
use App\ProductModel;
use Illuminate\Support\Facades\Redirect;
use Darryldecode\Cart\Cart\getPriceSub;
use App\Mail\SendPrescriptionConfirmationToUserMail as sendNotification;
use	Illuminate\Support\Facades\Mail;

class PharmConfirmPrescription extends Controller
{
    public function confirm(Request $request){
        $product_info=DB::table('tbl_products')
            ->where('product_id', $request->item_id)
            ->first();
        // echo response()->json($request->all());
        $host = $_SERVER['HTTP_HOST'];
        $data = array(
            'email'=>$request->email,
            'item_id' => $product_info->product_id,
            'item_name' => $product_info->product_name,
            'prescription' => 'confirmed',
            'host' => $host
        );
        Mail::send(new sendNotification($data));
        // echo response()->json($data);
        return redirect()->back()->with('message', 'Confirmation was successful');
    }
    public function confirmUser(Request $request){
        return redirect('/view_product'.'/'.$request->item_id)->with(['prescription'=> $request->prescription]);
    }
}
