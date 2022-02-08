
<!DOCTYPE html>
<html lang="en">
  <head>
     
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
     
     
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
           <?php $i=1 ?>
               <table>
                <tr style="background: rgb(110, 109, 109);align-items: center;">
                  <td style="padding: 20px">Sl.No</td>
                    <td style="padding: 20px">Name</td>
                    <td style="padding: 20px">Address</td>
                    <td style="padding: 20px">Phone No</td>
                    <td style="padding: 20px">Addhar No</td>
                    <td style="padding: 20px">From (km)</td>
                    <td style="padding: 20px">to (km)</td>
                    <td style="padding: 20px">Charge</td>
                    <td style="padding: 20px">Image</td>
                    <!-- <td style="padding: 20px">Status</td> -->
                    <td style="padding: 20px">Edit</td>
                    <td style="padding: 20px">Delete</td>
                </tr>
              @foreach($data as $boy)
             
                  
             
                   <tr  align="center" style="background: black;">
                   <td style="padding: 20px"><?php echo $i++; ?></td>
                   <td style="padding: 20px">{{$boy->name}}</td>
                   <td style="padding: 20px">{{$boy->address}}</td>
                   <td style="padding: 20px">{{$boy->phone}}</td>
                   <td style="padding: 20px">{{$boy->addhar}}</td>
                   <td style="padding: 20px">{{$boy->from}}</td>
                   <td style="padding: 20px">{{$boy->to}}</td>
                   <td style="padding: 20px">{{$boy->charge}}</td>
                    <td style="padding: 20px">
                    <img height="80" width="80"  src="/Boyimage/{{$boy->image}}">
                   
                    </td>
                    <!-- <td style="padding: 20px">
                    <input data-id="{{$boy->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$boy->status ? 'checked' : ''}}>
                  
                  </td> -->
                <td><a class="" href="{{url('updateboy',$boy->id)}}"><i class="fas fa-edit" style="color:green"></i></a></td>
                <td><a class="" href="{{url('deleteboy',$boy->id)}}"><i class="far fa-trash-alt" style="color:red"></a></td>
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
<!-- <script>
$(function(){
$('.toggle-class').change(function(){
   var status = $(this).prop('checked')==true ? 1 :0;
   var member_id = $(this).data('id');
   $.ajax({
      type:"GET",
      dataType:"json",
      url:'/changeStatus',
      data:{'status': status, 'member_id':member_id},
      success:function(data){
         console.log(data.success);
      }
   });
});

});
</script> -->