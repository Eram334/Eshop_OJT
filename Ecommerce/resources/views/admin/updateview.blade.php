
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
        <h1 class="title"> Update Product </h1>

        @if(session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
           {{session()->get('message')}}
       </div>
        @endif


        
      <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

  @csrf
        <div style="padding:15px;">
          <label for="">Product Title</label>
          <input type="text" name="title" style="color: black"; placeholder="" value="{{$data->title}}" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Price</label>
          <input type="number" name="price" style="color: black"; placeholder="Give Price" value="{{$data->price}}" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Description</label>
          <input type="text" name="description" style="color: black"; placeholder="Product Description" value="{{$data->description}}" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Quantity</label>
          <input type="number" name="quantity" style="color: black"; placeholder="Add Product Quantity" value="{{$data->quantity}}" require="">
        </div>
      

        <div style="padding:15px;">
          <label for="">OLd Image</label>
    <center><img height="100" width="100" src="/productimage/{{$data->image}}"></center>
        </div>

      <div style="padding:15px;">
      <label for="">Chnage Image</label>
          <input type="file" name="file">
        </div>


        <div style="padding:15px;">
         
          <input type="submit" class="btn btn-success">
        </div>
      
</form>
</div> 
  </div>
    

        @include('admin.script')
  </body>
</html>