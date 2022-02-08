<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
     @include('admin.css')
     

<style>
  .title{
     color: white; padding-top:25px; font-size: 25px;
  }
  label {
    display: inline-block;
    width: 200px
  }
  
</style>
     
  </head>
  <body>
     @include('admin.sidebar')
     
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">
      <div class="container" style="text-align: center">
        <h1 class="title"> Update Boy </h1>

        @if(session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
           {{session()->get('message')}}
       </div>
        @endif



        
      <form action="{{url('updateboys',$data->id)}}" method="post" enctype="multipart/form-data">

          @csrf
        <div style="padding:15px;">
          <label for="">Delivery Boy Name</label>
          <input type="text" name="name" value="{{$data->name}}" style="color: black"; placeholder="Delivery Boy Name" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Address</label>
          <!-- <input type="text" name="address" style="color: black"; placeholder="Address" require=""> --}} -->
          <input type="text" name="address" value="{{$data->address}}" style="color: black"; placeholder="Phone No" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Phone No</label>
          <input type="number" name="phone" value="{{$data->phone}}" style="color: black"; placeholder="Phone No" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Addhar No</label>
          <input type="number" name="addhar" value="{{$data->addhar}}" style="color: black"; placeholder="Addhar No" require="">
        </div>

        <div style="padding:15px;">
          <label for="">From (km) </label>
          <input type="number" name="from" value="{{$data->from}}" style="color: black"; placeholder="Form Distance (eg.km)" require="">
        </div>

          <div style="padding:15px;">
          <label for="">To (km) </label>
          <input type="number" name="to" value="{{$data->to}}" style="color: black"; placeholder="To Distance (eg.km)" require="">
        </div>
      
        <div style="padding:15px;">
          <label for="">Charge </label>
          <input type="number" name="charge" value="{{$data->charge}}" style="color: black"; placeholder="To Distance (eg.km)" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Profile</label>
    <center><img height="100" width="100" src="/Boyimage/{{$data->image}}"></center>
        </div>

      <div style="padding:15px;">
        <label for="">Change Profile</label> 
          <input type="file" name="file" id="file-ip-1" onchange="showPreview(event);">
           <div class="preview" style="margin-left: 74%;margin-top: -57px;">
              <img height=100px width=100px src="assets\images\user.png" id="file-ip-1-preview" name="file">
           </div>
        </div> 

       
        <div style="padding:15px;">
         
          <input type="submit" class="btn btn-success">
        </div>
        </div>
</form>
        
  </div>
        @include('admin.script')
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
                function showPreview(event) {
                    if (event.target.files.length > 0) {
                        var src = URL.createObjectURL(event.target.files[0]);
                        var preview = document.getElementById("file-ip-1-preview");
                        preview.src = src;
                        preview.style.display = "block";
                    }
                }
</script>