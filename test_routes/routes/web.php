<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');



Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture');

Route::get('/view_product/{product_id}','HomeController@product_details_by_id');
Route::post('/add-to-cart','CartController@add_to_cart')->middleware('prescription');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{id}','CartController@delete_to_cart');
Route::get('/aboutUs', 'AboutController@index');
Route::get('/contactUs', 'ContactUsController@index');
Route::post('/contactUs', 'ContactUsController@contact');
Route::get('/store-location', 'StoreLocationController@index');
Route::post('/update-cart','CartController@update_cart');
Route::post('/send-pharm-notification', 'SendPharmNotification@send');
Route::post('/pharm-confirm-prescription', 'PharmConfirmPrescription@confirm');
Route::post('/pharm-confirm-prescription-user', 'PharmConfirmPrescription@confirmUser');

//checkout

Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer-registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');
Route::post('/customer_login','CheckoutController@customer_login');
Route::get('/customer_logout','CheckoutController@customer_logout');
Route::get('/delete-order/{order_id}', 'CheckoutController@delete_order');


//payment
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@place_order');


//paypal
//Route::get('stripe', 'StripePaymentController@stripe');
Route::post('/stripe', 'StripePaymentController@stripePost');





Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order');
Route::get('/update-status/{order_id}/{status}','CheckoutController@updateStatus');
Route::get('/order_summary', function(){
return view('pages.order_summary');
});

Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');



Route::get('/add-category', 'CategoryController@index');
Route::get('/all-category', 'CategoryController@all_category');
Route::post('/save-category', 'CategoryController@save_category');
Route::get('/unactive_category/{category_id}', 'CategoryController@unactive_category');

Route::post('/update-category/{category_id}', 'CategoryController@update_category');
Route::get('/active_category/{category_id}', 'CategoryController@active_category');
Route::get('/edit-category/{category_id}', 'CategoryController@edit_category');
Route::get('/delete-category/{category_id}', 'CategoryController@delete_category');

Route::get('/add-manufacture', 'ManufactureController@index');
Route::post('/save-manufacture', 'ManufactureController@save_manufacture');
Route::get('/all-manufacture', 'ManufactureController@all_manufacture');

Route::get('/unactive_manufacture/{manufacture_id}', 'ManufactureController@unactive_manufacture');

Route::post('/update-manufacture/{manufacture_id}', 'ManufactureController@update_manufacture');
Route::get('/active_manufacture/{manufacture_id}', 'ManufactureController@active_manufacture');
Route::get('/edit-manufacture/{manufacture_id}', 'ManufactureController@edit_manufacture');
Route::get('/delete-manufacture/{manufacture_id}', 'ManufactureController@delete_manufacture');






//product codes here

Route::get('/add-product', 'ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product', 'ProductController@all_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');


Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');

Route::post('/update-product/{product_id}', 'ProductController@update_product');





//slider
Route::get('/add-slider', 'SliderController@index');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/all-slider','SliderController@all_slider');
Route::get('/unactive-slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active-slider/{slider_id}', 'SliderController@active_slider');
// Route::get('/paystack', 'PaystackController@paystack');
Route::get('/paystack', function(){

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/747143359",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_c388499eac2200cf3bfe64dd23315023fef090cb",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }


});
Route::post('/save-order-and-pay', 'PaystackController@paystackPay');

Route::get('/delete-slider/{slider_id}', 'SliderController@delete_slider');



Route::post('/search', function(){
$q=Request::input('q');
if($q != " "){
    $product_by_category=DB::table('tbl_products')
    ->where('tbl_products.product_name','LIKE', '%'.$q.'%')
    ->where('tbl_products.publication_status', 1)
    ->paginate(24);

    $manage_product_by_category=view('pages.category_by_products')
    ->with('product_by_category',$product_by_category);
    if( count ($product_by_category) >0){
        return view('layout')
        ->with('pages.category_by_products', $manage_product_by_category);

    
}else{
return view('layout')
->with('pages.product_details', 'NO RECORD FOUND');
}
}

});
