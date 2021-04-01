<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


use DB;
use App\Http\Requests;
use Session;
Session_start();

class CategoryController extends Controller
{



    public function index(){
        $this->AdminAuthCheck();
        return view('admin.add_category');
    }

    public function all_category(){

        $all_category_info=DB::table('tbl_category')->get();

        $manage_category=view('admin.all_category')
        ->with('all_category_info',$all_category_info);

        return view('admin_layout')
             ->with('admin_all_category', $manage_category);
    }

    public function save_category(Request $request){

        $category = (['category_name' => $request->category_name, 'category_description' => $request->category_description, 'publication_status' => $request->publication_status]);
        $size_category = count($category['category_name']);
        $loop_times = $size_category;
        if($category['category_name'] == [null] || $category['category_description'] == [null]){
            return redirect()->back()->with('errors','Error! Please fill up all fields');
        }else{
            $created = false;
            for($i=0; $i < $loop_times; $i++){
                $category_name = $category['category_name'][$i];
                $category_description = $category['category_description'][$i];
                $publication_status = $category['publication_status'][$i];
                $data['category_name'] = $category['category_name'][$i];
                $data['category_description'] = $category['category_description'][$i];
                $data['publication_status'] = $category['publication_status'][$i];
                
                if($category_name == null || $category_description == null){
                    if($i == 0){
                        $error = "Category ".($i+1)." could not be successfully added to record because Category name or Category code can not be empty!";    
                    }else{
                        $error = "Category ".($i+1)." could not be successfully added to record because Category name or Category code can not be empty! NB: OTHERS MAY HAVE BEEN CREATED SUCCESSFULLY";                       
                    }
                    return redirect()->back()->with('errors',$error);
                }else{
                    $Category = DB::table('tbl_category')->where('category_name',$category_name)->first();
                    // return response()->json($Category== null);
                    if($Category != null){
                        $error = 'Category "'.$category_name.'" could not be successfully added to record because Category name "'.$category_name.'" already exists!';
                        return redirect()->back()->with('errors',$error);
                    }else{
                        $create_category = DB::table('tbl_category')->insert($data);
                        if($create_category){
                            $created = true;
                        }else{
                            $created = false;
                        }
                    }
                }
            }
            if($created){
                return redirect()->back()->with('msg','Category(s) was successfully created!');
            }else{
                return redirect()->back()->with('msg','Category(s) could not be successfully created!');
            }
        }


    }
     public function unactive_category($category_id){
             DB::table('tbl_category')
                 ->where('category_id', $category_id)
                 ->update( ['publication_status'=> 0 ] );
                 Session::put('message','Category Unactive Successfully');
                 return Redirect::to('/all-category');


     }


     public function active_category($category_id){
        DB::table('tbl_category')
            ->where('category_id', $category_id)
            ->update( ['publication_status'=> 1 ] );
            Session::put('message','Category active Successfully');
            return Redirect::to('/all-category');


}

     public function edit_category($category_id){
                $this->AdminAuthCheck();
                $category_info= DB::table('tbl_category')
                    ->where('category_id', $category_id)
                    ->first();


        $category_info=view('admin.edit_category')
           ->with('category_info',$category_info);

           return view('admin_layout')
                ->with('admin.edit_category', $category_info);

}

public function update_category(Request $request, $category_id){
       $data =array();
       $data['category_name']=$request->category_name;
       $data['category_description']=$request->category_description;

       DB::table('tbl_category')
          ->where('category_id',$category_id)
          ->update($data);
          Session::get('message',' Update Successfully');

          return Redirect::to('/all-category');
}

        public function delete_category($category_id){

            DB::table('tbl_category')
              ->where('category_id',$category_id)
              ->delete();
              Session::get('message',' Delete Successfully');
              return Redirect::to('/all-category');

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