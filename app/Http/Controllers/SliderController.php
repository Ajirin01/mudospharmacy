<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Controllers\str_random;
use Illuminate\Support\Str;

class SliderController extends Controller
{


    public function index(){
        return view('admin.add_slider');
    }


    public function save_slider(Request $request){

        $data=array();
        $data['slider_name']=$request->slider_name;
        $data['slider_short_description']=$request->slider_short_description;
        $data['publication_status']=$request->publication_status;
        $image=$request->file('slider_image');

        if($image){
            $image_name=str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.','.$ext;
            $upload_path='sliders/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if($success){
                $data['slider_image']=$image_url;

                DB::table('tbl_slider')->insert($data);
                Session::put('message', 'Save Successfuly');
                return Redirect::to('/add-slider');

            }
        }
        $data['slider_image']='';
        DB::table('tbl_slider')->insert($data);
        Session::put('message', 'Save Successfuly Without image');
        return Redirect::to('/add-slider');

             }


         public function unactive_slider($slider_id){
            DB::table('tbl_slider')
                 ->where('slider_id', $slider_id)
                 ->update(['publication_status'=> 0 ]);
                 Session::put('message','Slider Unactive Successfully');
                 return Redirect::to('/all-slider');

          }

          public function active_slider($slider_id){
            DB::table('tbl_slider')
            ->where('slider_id', $slider_id)
            ->update(['publication_status' => 1 ]);
            Session::put('message','Slider active Successfully');
            return Redirect::to('/all-slider');

          }


          public function delete_slider($slider_id){

            DB::table('tbl_slider')
              ->where('slider_id',$slider_id)
              ->delete();
              Session::get('message',' Delete Successfully');
              return Redirect::to('/all-slider');

               }


              public function all_slider(){

                $all_slider=DB::table('tbl_slider')->get();

                $manage_slider=view('admin.all_slider')
                ->with('all_slider',$all_slider);

                return view('admin_layout')
                     ->with('admin_all_category', $manage_slider);
              }

}
