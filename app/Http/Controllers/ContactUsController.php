<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Mail\contactUsMail;
use	Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){
        return view('pages.contactUs');
    }

    public function contact(Request $request){
        $rules = [
            'full_name'=> 'required|min:5|max:100',
            'email'=> 'required',
            'message'=> 'required|min:10|max:300'
        ];

        $validator = Validator::make($request->all(), $rules);
        
        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
            // echo response()->json($validator->errors());
        }else{
            $data = array(
                'full_name' => $request->full_name,
                'email' => $request->email,
                'message' => $request->message
            );
            Mail::send(new contactUsMail($request->all()));
            return redirect()->back()->with('msg','message was successfully sent! we shall get back to you');
            }
    }
}
