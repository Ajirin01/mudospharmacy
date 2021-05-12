<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\str_random;
use Illuminate\Support\Str;
use Session;
use DB;
use App\Http\Requests;
use Validator;
Session_start();

class ProductController extends Controller
{
    //


    public function index(){
        $this->AdminAuthCheck();
        return view('admin.add_product');
    }



     public function all_product(){

        // $all_product_info=DB::table('tbl_products')
        //                  ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
        //                  ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
        //                  ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
        //                  ->get();
        $all_product_info=DB::table('tbl_products')
                         ->select('tbl_products.*')
                         ->get();
        
                     $manage_product=view('admin.all_product')
                             ->with('all_product_info',$all_product_info);

                           return view('admin_layout')
                             ->with('admin.all_product', $manage_product);

        }

    public function productExit($product_name){
        $product = DB::table('tbl_products')
                         ->select('tbl_products.*')
                         ->where('product_name',$product_name)
                         ->get();

        // return count($product);
        if(count($product) == 0){
            return false;
        }else{
            return true;
        }
    }


    public function save_product(Request $request){
        
        $data=array();
        $data['product_name']=$request->product_name;
        // echo $this->productExit($data['product_name']);
        // exit;
        $data['category_id']=$request->category_id;
        $data['manufacture_id']=$request->manufacture_id;
        $data['product_short_description']='';
        $data['product_long_description']=$request->product_long_description;
        $data['product_price']=$request->product_price;
        $data['product_size']=$request->product_size;
        $data['product_shipping_price']=$request->product_shipping_price;
        $data['publication_status']=$request->publication_status;
        $data['prescription']=$request->prescription;
        $data['manufacture_date']=$request->manufacture_date;
        $data['expiry_date']=$request->expiry_date;
        $image=$request->file('product_image');

        if($image){
            $image_name=str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.','.$ext;
            $upload_path='images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if($success){
                $product_exit = $this->productExit($data['product_name']);
                $data['product_image']=$image_url;
                if($product_exit){
                    // echo "<script>alert('Product Name :".$request->product_name." Already Exist!')</script>";
                    // echo "<script>window.location = '/add-product'</script>";
                    $error = "Product Name: ".$request->product_name." Already Exists!";
                    Session::put('error', $error);
                    return Redirect::to('/add-product');
                }else{
                    DB::table('tbl_products')->insert($data);
                    Session::put('message', 'Save Successfuly');
                    return Redirect::to('/add-product');
                }
               

            }
        }
        $data['product_image']='';
        DB::table('tbl_products')->insert($data);
        Session::put('message', 'Save Successfuly Without image');
        return Redirect::to('/add-product');

             }
    public function unactive_product($product_id){
        DB::table('tbl_products')
            ->where('product_id', $product_id)
            ->update( ['publication_status'=> 0 ] );
            Session::put('message','Product Unactive Successfully');
            return Redirect::to('/all-product');


    }

    public function active_product($product_id){
        DB::table('tbl_products')
            ->where('product_id', $product_id)
            ->update( ['publication_status'=> 1 ] );
            Session::put('message','Product active Successfully');
            return Redirect::to('/all-product');


    }


    public function edit_product($product_id){
        $this->AdminAuthCheck();
        $product_info= DB::table('tbl_products')
        ->where('product_id', $product_id)
        ->first();


   $product_info=view('admin.edit_product')
      ->with('product_info',$product_info);

      return view('admin_layout')
           ->with('admin.edit_product', $product_info);

}

public function update_product(Request $request, $product_id){

    $rules = [
        'category_id' => 'digits_between:1,10',
        'manufacture_id' => 'digits_between:1,10'
    ];

    $validator = Validator::make($request->all(),$rules);
    if($validator->fails()){
        Session::put('error','Please make sure your select Product Category
        and Manufacture Name');
        return redirect()->back();
    }else{
    // echo json_encode($request->all());
    // exit;
   $data=array();
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['manufacture_id']=$request->manufacture_id;
        $data['product_short_description']='';
        $data['product_long_description']=$request->product_long_description;
        $data['product_price']=$request->product_price;
        $data['product_size']=$request->product_size;
        $data['product_shipping_price']=$request->product_shipping_price;
        $data['publication_status']=$request->publication_status;
        $data['prescription']=$request->prescription;
        $data['manufacture_date']=$request->manufacture_date;
        $data['expiry_date']=$request->expiry_date;
        $image=$request->file('product_image');

        $product_info= DB::table('tbl_products')
        ->where('product_id', $product_id)
        ->first();

        $inital_product_image = $product_info->product_image;

        if($image){
            $image_name=str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.','.$ext;
            $upload_path='images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if($success){
                $data['product_image']=$image_url;

                DB::table('tbl_products')
                ->where('product_id', $product_id)
                ->update($data);
                Session::put('message', 'Update Successfuly');
                return Redirect::to('/all-product');

            }

        }
        $data['product_image']=$inital_product_image;
        $result = DB::table('tbl_products')
        ->where('product_id',$product_id)
        ->update($data);
        
        // echo $result;
        if($result == 1){
            Session::put('message', 'Update Successfuly Without image changes');
        return Redirect::to('/all-product');
    }else{
        echo "error occurred";
    }
    }
        
    }

   public function delete_product($product_id){

       DB::table('tbl_products')
         ->where('product_id',$product_id)
         ->delete();
         Session::get('message','Delete Successfully');
         return Redirect::to('/all-product');

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