<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreLocationController extends Controller
{
    public function index(){
        return view('pages.storeLocation');
    }
}
