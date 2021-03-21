<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class HomeController extends Controller
{
    //
  public function index(){
    $all_published_product=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
    ->where('tbl_products.publication_status', 1)
    // ->paginate(24);
    ->paginate(50);

    $random_published_product = DB::table('tbl_products')
    ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
    ->where('tbl_products.publication_status', 1)
    // ->paginate(24);
    ->inRandomOrder()->get();

    $old_published_product = DB::table('tbl_products')
    ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
    ->where('tbl_products.publication_status', 1)
    // ->paginate(24);
    ->orderBy('product_id', 'desc')->paginate(50);

    $manage_published_product=view('pages.home_content_new', ['all_published_product'=>$all_published_product,
    'random_products'=>$random_published_product,
    'older_products'=>$old_published_product]);

    return view('blue_layout')
                ->with('pages.home_content_new', $manage_published_product);

  }

  public function all_products(){
    $all_published_product=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
    ->where('tbl_products.publication_status', 1)
    // ->paginate(24);
    ->paginate(50);

    $manage_published_product=view('pages.all_products', ['all_published_product'=>$all_published_product]);

    return view('blue_layout')
        ->with('pages.all_products', $manage_published_product);
  }

  public function show_product_by_category($category_id){
    $product_by_category=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.category_id')
    ->select('tbl_products.*','tbl_category.category_name')
    ->where('tbl_category.category_id', $category_id)
    ->where('tbl_products.publication_status', 1)
  // ->paginate(24)
    ->paginate(50);
  
    $category = DB::table('tbl_category')
    ->where('category_id',$category_id)
    ->get();

    $manage_product_by_category=view('pages.product_by_category',['product_by_category'=>$product_by_category, 'category'=>$category]);
            // ->with('product_by_category',$product_by_category);

    return view('blue_layout')
      ->with('pages.product_by_category', $manage_product_by_category);
  }

               



  public function show_product_by_manufacture($manufacture_id){
    $product_by_manufacture=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
    ->where('tbl_manufacture.manufacture_id', $manufacture_id)
    ->where('tbl_products.publication_status', 1)
    // ->paginate(24);
    ->paginate(50);

    $manufacture = DB::table('tbl_manufacture')
    ->where('manufacture_id',$manufacture_id)
    ->get();

    $manage_product_by_manufacture=view('pages.product_by_brand',['product_by_brand'=>$product_by_manufacture,
     'brand'=>$manufacture]);
    return view('blue_layout')
    ->with('pages.product_by_brand', $manage_product_by_manufacture);

  }

  public function  product_details_by_id($product_id){
    Session::put('product_id',$product_id);
    $product_by_details=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
    ->where('tbl_products.product_id', $product_id)
    ->where('tbl_products.publication_status', 1)
    ->first();

    $manage_product_by_details=view('pages.product_details')
        ->with('product_by_details',$product_by_details);

      return view('blue_layout')
        ->with('pages.product_details', $manage_product_by_details);



  }


}
