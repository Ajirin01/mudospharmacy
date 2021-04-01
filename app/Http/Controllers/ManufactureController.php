<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\Redirect;
use DB;
use App\Http\Requests;
use Session;
Session_start();

class ManufactureController extends Controller
{
    public function index(){
        $this->AdminAuthCheck();



         return view('admin.add_manufacture');
    }

    public function save_manufacture(Request $request){
        $manufacturer = (['manufacture_name' => $request->manufacture_name, 'manufacture_description' => $request->manufacture_description, 'publication_status' => $request->publication_status]);
        $size_manufacturer = count($manufacturer['manufacture_name']);
        $loop_times = $size_manufacturer;
        if($manufacturer['manufacture_name'] == [null] || $manufacturer['manufacture_description'] == [null]){
            return redirect()->back()->with('errors','Error! Please fill up all fields');
        }else{
            $created = false;
            for($i=0; $i < $loop_times; $i++){
                $manufacture_name = $manufacturer['manufacture_name'][$i];
                $manufacture_description = $manufacturer['manufacture_description'][$i];
                $publication_status = $manufacturer['publication_status'][$i];
                $data['manufacture_name'] = $manufacturer['manufacture_name'][$i];
                $data['manufacture_description'] = $manufacturer['manufacture_description'][$i];
                $data['publication_status'] = $manufacturer['publication_status'][$i];
                
                if($manufacture_name == null || $manufacture_description == null){
                    if($i == 0){
                        $error = "Manufacturer ".($i+1)." could not be successfully added to record because Manufacturer name or Manufacturer code can not be empty!";    
                    }else{
                        $error = "Manufacturer ".($i+1)." could not be successfully added to record because Manufacturer name or Manufacturer code can not be empty! NB: OTHERS MAY HAVE BEEN CREATED SUCCESSFULLY";                       
                    }
                    return redirect()->back()->with('errors',$error);
                }else{
                    $Manufacturer = DB::table('tbl_manufacture')->where('manufacture_name',$manufacture_name)->first();
                    // return response()->json($Manufacturer== null);
                    if($Manufacturer != null){
                        $error = 'Manufacturer "'.$manufacture_name.'" could not be successfully added to record because Manufacturer name "'.$manufacture_name.'" already exists!';
                        return redirect()->back()->with('errors',$error);
                    }else{
                        $create_manufacturer = DB::table('tbl_manufacture')->insert($data);
                        if($create_manufacturer){
                            $created = true;
                        }else{
                            $created = false;
                        }
                    }
                }
            }
            if($created){
                return redirect()->back()->with('msg','Manufacturer(s) was successfully created!');
            }else{
                return redirect()->back()->with('msg','Manufacturer(s) could not be successfully created!');
            }
        }


   }

    public function all_manufacture(){
        $this->AdminAuthCheck();
        $all_manufacture_info=DB::table('tbl_manufacture')->get();

        $manage_manufacture=view('admin.all_manufacture')
        ->with('all_manufacture_info',$all_manufacture_info);

        return view('admin_layout')
                ->with('admin_all_manufacture', $manage_manufacture);



    }



          public function unactive_manufacture($manufacture_id){
            DB::table('tbl_manufacture')
                ->where('manufacture_id', $manufacture_id)
                ->update( ['publication_status'=> 0 ] );
                Session::put('message','Manufacture Unactive Successfully');
                return Redirect::to('/all-manufacture');


    }


    public function active_manufacture($manufacture_id){
       DB::table('tbl_manufacture')
           ->where('manufacture_id', $manufacture_id)
           ->update( ['publication_status'=> 1 ] );
           Session::put('message','Manufacture active Successfully');
           return Redirect::to('/all-manufacture');


}

public function edit_manufacture($manufacture_id){
    $this->AdminAuthCheck();
   $manufacture_info= DB::table('tbl_manufacture')
          ->where('manufacture_id', $manufacture_id)
          ->first();


       $manufacture_info=view('admin.edit_manufacture')
          ->with('manufacture_info',$manufacture_info);

          return view('admin_layout')
               ->with('admin.edit_manufacture', $manufacture_info);

}

public function update_manufacture(Request $request, $manufacture_id){
      $data =array();
      $data['manufacture_name']=$request->manufacture_name;
      $data['manufacture_description']=$request->manufacture_description;

      DB::table('tbl_manufacture')
         ->where('manufacture_id',$manufacture_id)
         ->update($data);
         Session::get('message',' Update Successfully');

         return Redirect::to('/all-manufacture');
}

       public function delete_manufacture($manufacture_id){

           DB::table('tbl_manufacture')
             ->where('manufacture_id',$manufacture_id)
             ->delete();
             Session::get('message',' Delete Successfully');
             return Redirect::to('/all-manufacture');

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