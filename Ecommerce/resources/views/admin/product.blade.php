
<!DOCTYPE html>
<html lang="en">
  <head>
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
        <h1 class="title"> Add Product </h1>

        @if(session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
           {{session()->get('message')}}
       </div>
        @endif


        
      <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

  @csrf
        <div style="padding:15px;">
          <label for="">Product Title</label>
          <input type="text" name="title" style="color: black"; placeholder="Give a product title" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Price</label>
          <input type="number" name="price" style="color: black"; placeholder="Give Price" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Description</label>
          <input type="text" name="description" style="color: black"; placeholder="Product Description" require="">
        </div>

        <div style="padding:15px;">
          <label for="">Quantity</label>
          <input type="number" name="quantity" style="color: black"; placeholder="Add Product Quantity" require="">
        </div>
      

      <div style="padding:15px;">
         
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