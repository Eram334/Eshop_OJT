  <title>Review & Rating System in PHP & Mysql using Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>
  <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
           
            <form action="{{url('search')}}" method="get" required class="form-inline" style="float: right;padding:10px;">
        @csrf     
        <input type="search" class="form-control" name="search" placeholder="Search here">
              <input type="submit" value="search" class="btn btn-success">
           </form>
           
            </div>
          </div>
   @foreach($data as $product)
          <div class="col-md-4">
            <div class="product-item">
            <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <h6>{{$product->price}}</h6>
                <p>{{$product->description}}</p>

              <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf
                  <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                  <br>

                    <input class="btn btn-primary" type="submit" style="float: right;" value="Add Cart">

                </form>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  {{-- <a href="{{ url('/rating') }}">Give your Rate</a> --}} 
  
    <div class="container">
      
      <a href="{{ url('/rating') }}" id="add_review">Give your rate</a>
  </div>
    <!-- <div class="container" style="line-height: -29px">
     <a href="{{ url('/rating') }}" id="add_review">Give your rate</a>
    </div> -->

<!-- <div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
           <center>  <h3> Submit Review</h3></center>
                <h4 class="text-center mt-2 mb-4 star_parent">
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>

                </h4>
                <div class="form-group">
                    <input type="text" name="user_name" id="user_name" class="form-control"
                        placeholder="Enter Your Name" />
                </div>
                <div class="form-group">
                    <textarea name="user_review" id="user_review" class="form-control"
                        placeholder="Type Review Here"></textarea>
                </div>
                <div class="form-group text-center mt-4">
                    <button type="button" class="btn btn-primary" id="save_review" name>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#add_review').click(function () {
            $('#review_modal').modal('show');
            return false;
        })
        $(document).on('mouseenter', '.submit_star', function () {

            var rating = $(this).data('rating');
            reset_background();
            for (var i = 1; i <= rating; i++) {
                $('#submit_star_' + i).addClass('text-warning');
            }
        })

        function reset_background() {
            for (var i = 1; i <= 5; i++) {
                $('#submit_star_' + i).addClass('star-light');
                $('#submit_star_' + i).removeClass('text-warning');
            }

        }

        $(document).on('mouseleave', '.submit_star', function () {
            reset_background();
            var rating = $(this).data('rating');

            for (var i = 1; i <= rating; i++) {
                $('.submit_star').removeClass('text-warning');
                $('#submit_star_' + i).removeClass('text-warning');
            }
        })

        var rating_data = 0;
        $(document).on('click', '.submit_star', function () {

            var rating = $(this).data('rating');
            reset_background();
            $('.submit_star').css('color', "#000000	");
            for (var i = 1; i <= rating; i++) {
                $('#submit_star_' + i).css('color', "#f33f3f");
            }
            // rating_data = i;

        })

        $('#save_review').click(function () {
            var user_name = $('#user_name').val();
            var user_review = $('#user_review').val();
            // console.log(user_name);
            if (user_name == '' || user_review == '') {
                alert("Please fill both field");
                return false;
            } else {
                $.ajax({
                    url: "connection.php",
                    method: "POST",
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,

                    data: {
                        rating_data: rating_data,
                        user_name: user_name,
                        user_review: user_review,
                        save_review: true
                    },
                    success: function (data) {
                        $('#review_modal').modal('hide');
                        // load_rating_data();
                        alert(data);
                    }

                })
            }
        })

    })
</script> -->


                 

                  
                </ul>
                {{-- <span>Reviews (32)</span> --}}
              </div>
            </div>
          </div>
    @endforeach

    @if(method_exists($data,'links'))

    <div class="d-flex justify-content-center">
       {!! $data->links() !!}
    </div>
     
    @endif

  </div>