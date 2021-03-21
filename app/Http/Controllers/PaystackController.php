<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaystackController extends Controller
{
    public function paystack(){
        return view('pages.checkPaystack');
    }
    public function paystackPay(){
        $url = "https://api.paystack.co/transaction/initialize";
        $fields = [
            'email' => "customer@email.com",
            'amount' => "20000"
        ];
        $fields_string = http_build_query($fields);
        //open connection
        $ch = curl_init();
        
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer SECRET_KEY",
            "Cache-Control: no-cache",
        ));
        
        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        
        //execute post
        $result = curl_exec($ch);
        echo $result;
        // curl https://api.paystack.co/transaction/743491191 -H "Authorization: Bearer sk_live_a6a7ba6dc6fdd5fed5d6490a51d52b693191026e" -X GET
        // curl https://api.paystack.co/transaction/initialize -H "Authorization: Bearer YOUR_SECRET_KEY" -H "Content-Type: application/json" -d '{ email: "customer@email.com", amount: "20000" }' -X POST
    }
}
