
<!DOCTYPE html>
<html lang="en">
  <head>
     @include('admin.css')
     
  </head>
  <body>
     @include('admin.sidebar')
     
      @include('admin.navbar')
      
        <div style="padding-bottom:30px" class="container-fluid page-body-wrapper">
           <div class="container" style="text-align: center">
              @if(session()->has('message'))

        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">X</button>
           {{session()->get('message')}}
       </div>
        @endif
           <center> 
           <?php $i=1 ?>;
               <table>
                <tr style="background: rgb(110, 109, 109);align-items: center;">
                  <td style="padding: 20px">Sl.No</td>
                    <td style="padding: 20px">Title</td>
                    <td style="padding: 20px">Description</td>
                    <td style="padding: 20px">Quantity</td>
                    <td style="padding: 20px">Price</td>
                    <td style="padding: 20px">Image</td>
                    <td style="padding: 20px">Update</td>
                    <td style="padding: 20px">Delete</td>
                </tr>
              @foreach($data as $product)
             
                  
             
                   <tr  align="center" style="background: black;">
                   <td style="padding: 20px"><?php echo $i++; ?></td>
                   <td style="padding: 20px">{{$product->title}}</td>
                   <td style="padding: 20px">{{$product->description}}</td>
                   <td style="padding: 20px">{{$product->quantity}}</td>
                   <td style="padding: 20px">{{$product->price}}</td>
                    <td style="padding: 20px">
                    <img height="100" width="100"  src="/productimage/{{$product->image}}">
                   
                    </td>
                       <td><a class="" href="{{url('updateview',$product->id)}}"><i class="fas fa-edit" style="color:green"></i></a></td>
                <td><a class="" href="{{url('deleteproduct',$product->id)}}"><i class="far fa-trash-alt" style="color:red"></a></td>
                </tr>
                </tr>
              @endforeach

            </table>
        </center>
           </div>
        </div>

        @include('admin.script')
  </body>
</html>