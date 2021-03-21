<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;

use App\Http\Requests;
use Session;
Session_start();
class SuperAdminController extends Controller
{
    //



    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);
       return Redirect::to('/admin');
    }

     public function index()
    {

        $this->AdminAuthCheck();
        return view('admin.dashboard');

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
