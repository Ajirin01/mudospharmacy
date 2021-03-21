<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use Cart;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function login_check(Request $request){
        Session::put('total_price', $request->total_price);
        return view('pages.login',['total_price'=>Session::get('total_price')]);
    }
    
    public function register_check(Request $request){
        Session::put('total_price', $request->total_price);
        return view('pages.register',['total_price'=>Session::get('total_price')]);
    }

    public function customer_registration(Request $request){

        $data=array();
        $data['customer_name']=$request->customer_name;
        $data['customer_email']=$request->customer_email;
        $data['password']=md5($request->password);
        $data['mobile_number']=$request->mobile_number;
      
        $result=DB::table('tbl_customer')
               ->where('customer_email',$request->customer_email)
               ->get();
        // return response()->json(count($result)>0);
        // exit;
        if(count($result)>0){
          return redirect()->back()->with('error','email already exists!');
        }else{
          $customer_id= DB::table('tbl_customer')
                          ->insertGetId($data);
          Session::put('total_price', $request->total_price);
          Session::put('customer_id', $customer_id);
          Session::put('customer_name',$request->customer_name);
          Session::put('email',$request->customer_email);
          return Redirect::to('/checkout');
        }
    }


    public function checkout(Request $request){
        if(Session::has('total_price')){
          $total_price = Session::get('total_price');

          $cart = Cart::getContent();
          $data = array();
          $data['cart'] = $cart;
          $data['customer_id'] = Session::get('customer_id');
          $subtotal_price = 0;
          foreach($cart as $cart){
            $subtotal_price = $subtotal_price + $cart->price * $cart->quantity;
          }
          
          $data['sub_total'] = $subtotal_price;
          $data['total_price'] = $total_price;
          

          $temp_data = DB::table('tbl_temp_data')
                        ->where('customer_id',Session::get('customer_id'))
                        ->first();

          if($temp_data){
            $result = DB::table('tbl_temp_data')
                        ->where('customer_id',Session::get('customer_id'))
                        ->update($data);
            return view('pages.checkout');
          }else{
            $temp_data = DB::table('tbl_temp_data')
                      ->insertGetId($data);
            return view('pages.checkout');
          }
        }else{
          $total_price = $request->total_price;
          Session::put('total_price', $total_price);
          return Redirect::to('/show-cart');
        }
        // $cart = Cart::getContent();
        // $data = array();
        // $data['cart'] = $cart;
        // $data['customer_id'] = Session::get('customer_id');
        // $subtotal_price = 0;
        // foreach($cart as $cart){
        //   $subtotal_price = $subtotal_price + $cart->price * $cart->quantity;
        // }
        
        // $data['sub_total'] = $subtotal_price;
        // $data['total_price'] = $total_price;
        

        // $temp_data = DB::table('tbl_temp_data')
        //               ->where('customer_id',Session::get('customer_id'))
        //               ->first();

        // if($temp_data){
        //   $result = DB::table('tbl_temp_data')
        //               ->where('customer_id',Session::get('customer_id'))
        //               ->update($data);
        //   return view('pages.checkout');
        // }else{
        //   $temp_data = DB::table('tbl_temp_data')
        //              ->insertGetId($data);
        //   return view('pages.checkout');
        // }
        

    }

    public function save_shipping_details(Request $request){
        $data=array();
        $data['shipping_email']=$request->shipping_email;
        $data['shipping_first_name']=$request->shipping_first_name;
        $data['shipping_last_name']=$request->shipping_last_name;
        $data['shipping_address']=$request->shipping_address;
        $data['shipping_mobile_number']=$request->shipping_mobile_number;
        $data['shipping_city']=$request->shipping_city;


        $shipping_id=DB::table('tbl_shipping')
                 ->insertGetId($data);
        DB::update('update  tbl_temp_data set shipping_id ='.$shipping_id.' where customer_id  = ?', [Session::get('customer_id')]);
        return Redirect::to('/payment');

    }

    public function customer_login(Request $request){
    
        $customer_email=$request->customer_email;
        $password=md5($request->password);
        $result=DB::table('tbl_customer')
               ->where('customer_email',$customer_email)
               ->where('password', $password)
               ->first();

              if($result){
                  Session::put('customer_id',$result->customer_id);
                  Session::put('email',$result->customer_email);
                  return Redirect::to('/checkout');
              }
              else{
                return Redirect::to('/');
              }
    }

  public function payment(Request $request){
    $url = 'http://localhost:8000?customer_id='.Session::get('customer_id');
                return Redirect::to($url);
      // return view('pages.payment');
  }


  public function place_order(Request $request){



      $payment_gateway=$request->payment_method;
      $pdata['payment_method']=$payment_gateway;
      $pdata['payment_status']='pending';

      $payment_id=DB::table('tbl_payment')
             ->insertGetId($pdata);
            $odata['customer_id']=Session::get('customer_id');
             $odata['shipping_id']=Session::get('shipping_id');
             $odata['payment_id']=$payment_id;
             $odata['order_total']=Cart::getTotal();
             $odata['order_status']='pending';

             $order_id=DB::table('tbl_order')
                      ->insertGetId($odata);
                         $contents=\Cart::getContent();
                         $oddata=array();
                            foreach($contents as $v_content)
                                           {
                          $oddata['order_id']=$order_id;
                          $oddata['product_id']=$v_content->id;
                          $oddata['product_name']=$v_content->name;
                          $oddata['product_price']=$v_content->price;
                          $oddata['product_sales_quantity']=$v_content->quantity;

                          DB::table('tbl_order_details')
                              ->insert($oddata);
                                        }

                     if($payment_gateway=='paypal'){
                         $url = 'http://payment.mudospharmacy.com';
                        return Redirect::to($url);
                        //return 'payment.mudospharmacy.com';

                    }

                    elseif($payment_gateway=='transfer'){
                        return view('pages.account');

                    }

                    else{
                        echo  "pick or select an option";
                    }

  }


  public function manage_order(){

    $all_order= DB::table('tbl_order_details')->select('*')->get();

    // return response()->json($all_order);
                     $manage_order=view('admin.manage_order')
                             ->with('all_order',$all_order);

                           return view('admin_layout')
                             ->with('admin.manage_order', $manage_order);

  }

  public function view_order($order_id){
    $order_by_id= DB::table('tbl_order_details')->where('order_details_id', $order_id)->get();
            $view_order=view('admin.view_order')
                ->with('order_by_id',$order_by_id);

              return view('admin_layout')
                ->with('admin.view_order', $view_order);
  }

    public function updateStatus($order_id, $status, Request $request){
      if($request->has('type')){
        if($request->type == "prescription")
          {
            $status = $status;
            $order_id = $order_id;
            DB::update("update prescription set status = '$status' where prescription_id  = ?", [$order_id]);
            return Redirect::to('/prescription-list');

          }
      }else{
        $status = $status;
      $order_id = $order_id;
      // return response()->json([$status, $order_id]);
        DB::update("update tbl_order_details set status = '$status' where order_details_id  = ?", [$order_id]);
        return Redirect::to('/manage-order');

      }
      
      }

  public function delete_order($order_id){

    DB::table('tbl_order_details')
      ->where('order_details_id',$order_id)
      ->delete();
      Session::get('message',' Delete Successfully');
      return Redirect::to('/manage-order');

       }


    public function customer_logout(){
        Session::flush();
        return Redirect::to('/');
    }
}
