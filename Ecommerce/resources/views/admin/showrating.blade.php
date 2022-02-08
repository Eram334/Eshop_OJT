
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
                    <td style="padding: 20px">Customer Name</td>
                    <td style="padding: 20px">Customer Review</td>
                    <td style="padding: 20px">Star Rating</td>
                    <td style="padding: 20px">Delete</td>

                    
                </tr>
              @foreach($data as $rating)
            
                   <tr  align="center" style="background: black;">
                   <td style="padding: 20px"><?php echo $i++; ?></td>
                   <td style="padding: 20px">{{$rating->user_name}}</td>
                   <td style="padding: 20px">{{$rating->user_review}}</td>
                   <td style="padding: 20px">{{$rating->four}}</td>
                   <td><a class="" href="{{url('deleterating',$rating->id)}}"><i class="far fa-trash-alt" style="color:red"></a></td>
                  
    
                </tr>
              @endforeach

            </table>
        </center>
           </div>
        </div>

        @include('admin.script')
  </body>
</html>