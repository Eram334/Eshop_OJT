<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
class RatingController extends Controller
{
    public function rating(){
        return view('rating');
    }

    public function uploadrating(Request $request){
        $data = new Rating;

    
        $data->four = $request->four;
        // $data->five = $request->five;
        $data->user_name = $request->user_name;
        $data->user_review = $request->user_review;
        // $data->status = $request->status;
        $data->save();

        return redirect()->back()->with('message','Thanks for giving your Rating!!');
    
    }
    public function showrating()
    {

        $data = Rating::all();
        return view('admin.showrating',compact('data'));
    }

    public function deleterating($id)
    {

        $data = Rating::find($id);
        
        $data->delete();

        return redirect()->back()->with('message', 'Customer Ratings Deleted Successfully !!');
    }
}
