<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function contact(){
        return view('/contact');
    }

    public function uploadContact(Request $request){
        $data = new Contact;

        $data->name=$request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
       
        $data->save();

        return redirect()->back()->with('message','Thanks for Submitting,we will contact you soon!! ');
    
    }
}
