<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use DB;
use App\ProductModel;
use Illuminate\Support\Facades\Redirect;
use Darryldecode\Cart\Cart\getPriceSub;
class CartController extends Controller
{
    public function add_to_cart(Request $request){

        $qty=$request->qty;
        $product_id=$request->product_id;
        $product_info=DB::table('tbl_products')
            ->where('product_id', $product_id)
            ->first();

            $ee=ProductModel::find($product_id);

           // $data['qty']=$qty;
           // $data['id']=$product_info->product_id;
           // $data['name']=$product_info->product_name;
           // $data['price']=$product_info->product_price;
           // $data['option']['image']=$product_info->product_image;
                \Cart::add(array(
                'id' => $product_info->product_id,
                'name' => $product_info->product_name,
                'price' => $product_info->product_price,
                'quantity' => $qty,
                'attributes' => array(),
                'associatedModel' => $ee

            ));

            return Redirect::to('/show-cart');


    }

    public function show_cart(){

        $all_published_category=DB::table('tbl_category')
                                    ->where('publication_status',1)
                                    ->get();

                         $manage_published_category=view('pages.add_to_cart')
                                    ->with('all_published_category',$all_published_category);

                                    return view('blue_layout')
                                    ->with('pages.add_to_cart', $manage_published_category);


    }


    public function delete_to_cart($id){

        //$product_id=$id;
       // $ee=ProductModel::find($product_id);

      \Cart::remove($id);
      return Redirect::to('/show-cart');

    }

    public function update_cart(Request $request)
    {
        $id=$request->id;
        $qty=$request->qty;


    \Cart::update($id, array(
          'quantity' => array(
              'relative' => false,
              'value' => $qty
          ),
    ));
    return Redirect::to('/show-cart');
    }
}
