<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use SimpleCSV;
use Session;

Session_start();

class UploadDrugListController extends Controller
{
    public function index(){
        $this->AdminAuthCheck();
        return view('admin.upload_drug_list');
    }

    public function upload(Request $request){
        $csv = SimpleCSV::import($request->file('drug_list'));
        // print_r( $csv );
        $data=array();
        $uploaded = true;
        for($i=1; $i<count($csv)-1; $i++){
            $data[$i]['product_name']=$csv[$i][1];
            $data[$i]['category_id']='0';
            $data[$i]['manufacture_id']= '0';
            $data[$i]['product_short_description']='';
            $data[$i]['product_long_description']='';
            $data[$i]['product_price']=$csv[$i][2];
            $data[$i]['product_size']='';
            $data[$i]['product_shipping_price']='0';
            $data[$i]['publication_status']='0';
            $data[$i]['prescription']='';
            $data[$i]['manufacture_date']='';
            $data[$i]['expiry_date']='';
            $data[$i]['product_image']='images/p.jpg';
            $product = DB::table('tbl_products')->where('product_name',$data[$i]['product_name'])->get();
            if(count($product) > 0){
                // Session::put('error', 'product name '.$data[$i]['product_name'].' already exits! so upload stops at row '.$i);
                // return Redirect::to('/upload-drug-list');
                ;
            }else{
                $uploaded = DB::table('tbl_products')->insert($data[$i]);
            }
            
        }
        if($uploaded){
            Session::put('message', 'Save Successfuly');
            return Redirect::to('/upload-drug-list');
        }
    }

    public function AdminAuthCheck(){
        $admin_id=Session::get('admin_id');

        if($admin_id){
            return;
        }else{
            return Redirect::to('/admin')->send();
        }

    }
}