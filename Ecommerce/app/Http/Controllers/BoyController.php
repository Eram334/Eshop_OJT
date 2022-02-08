<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boy;



class BoyController extends Controller
{
    public function boy(){
        return view('admin.boy');
    }

    public function uploadboy(Request $request){
        $data = new Boy;

        $image = $request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('Boyimage',$imagename);

        $data->image=$imagename;

        $data->name=$request->name;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->addhar = $request->addhar;
        $data->from = $request->from;
        $data->to = $request->to;
        $data->charge = $request->charge;
        // $data->status = $request->status;
        $data->save();

        return redirect()->back()->with('message','Delivery Boy added Successfully');
    
    }
    public function showboy()
    {

        $data = Boy::all();
        return view('admin.showboy',compact('data'));
    }

    public function deleteboy($id)
    {

        $data = Boy::find($id);
        
        $data->delete();

        return redirect()->back()->with('message', 'Delivery Boy Deleted Successfully');
    }

    public function updateboy($id)
    {

        $data = Boy::find($id);

        return view('admin.updateboy',compact('data'));
    }

    public function updateboys(Request $request,$id)
  {   
    $data=Boy::find($id);
    $image = $request->file;
    
    if($image)
    {

    
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('Boyimage',$imagename);

    $data->image=$imagename;
    }
    $data->name=$request->name;
    $data->address = $request->address;
    $data->phone = $request->phone;
    $data->addhar = $request->addhar;
    $data->from = $request->from;
    $data->to = $request->to;
    $data->charge = $request->charge;
    $data->save();

    return redirect()->back()->with('message','Delivery Updated Successfully');


}

// public function changeMemberStatus(Request $request)
// {
//    $members = Boy::find($request->member_id);
//    $members->status = $request->status;
//    $members->save();
// }
}
