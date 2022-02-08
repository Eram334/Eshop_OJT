<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
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

<body>
@if(session()->has('message'))

<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">X</button>
   {{session()->get('message')}}
</div>
@endif

@if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}  <button type="button" class="close" data-dismiss="alert">X</button></h6>
@endif
    <div class="container">
      
        <a href="" id="add_review">Give your rate</a>
    </div>
</body>

</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('uploadrating')}}" method="post" >

              @csrf
            <div class="modal-body">
                <h4 class="text-center mt-2 mb-4 star_parent">
                <input type="hidden" name="one" value="1"><i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                <input type="hidden" name="two" value="2"><i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                <input type="hidden" name="three" value="3"><i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                <input type="hidden" name="four" value="4"><i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                <input type="hidden" name="five" value="5"><i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>

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
                    <button type="submit" class="btn btn-primary" id="save_review" name>Submit</button>
                </div>
            </div>
       </form>
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
                // alert("Please fill both field");
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
</script>