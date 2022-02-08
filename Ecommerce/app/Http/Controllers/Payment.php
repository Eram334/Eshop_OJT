<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Payment extends Controller
{
    function submit(){
        
        $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_a7f639cb4cfdfa08eec2e304d24",
                  "X-Auth-Token:test_f9e2ab52fa92233812390f42073"));
$payload = Array(
    'purpose' => 'Buy Product',
    'amount' => '399',
    'phone' => '6290866465',
    'buyer_name' => 'John Doe',
    'redirect_url' => 'http://127.0.0.1:8000/instamojo_redirect',
    'send_email' => true,
    // 'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => 'foo@example.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$response =json_decode($response);
echo '<pre>';
//print_r($response->payment_request->longurl);
return redirect($response->payment_request->longurl);

    }

    function instamojo_redirect(){
        echo '<pre>';
        print_r($_GET);
    }
}
