<!DOCTYPE html>
<style>
 nav{
    margin-top:-30px;
  }
</style>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>eShop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>e <em>Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="http://127.0.0.1:8000/">Home
                 
                </a>
              </li> 
              <li class="nav-item">
              <a class="nav-link" href="{{url('/pro')}}">Our Products</a>
              </li>
              
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/contact')}}">Contact Us</a> <span class="sr-only">(current)</span>
              </li>

              

            <li class="nav-item">
               @if (Route::has('login'))
              
                    @auth

                      <li class="nav-item">
                      <a class="nav-link" href="{{url('showcart')}}"><i class="fas fa-shopping-cart"></i> Cart </a>
              </li>

                     <x-app-layout>

                     </x-app-layout>
                        </a></li>
                    @else
                      <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endif
                    @endauth
                
                    @endif
            </li>

            
            </ul>
          </div>
        </div>
      </nav>
      

         @if(session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
           {{session()->get('message')}}
       </div>
        @endif

        
    </header>


    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>contact us</h4>
              <h2>let’s get in touch</h2>
            </div>

            <style>

              @import url('https://fonts.googleapis.com/css?family=Montserrat');
              
              
              body {
                
                color: #fff;
              }
              .container {
                padding: 30px 50px;
              }
              #search-form {
                width: 30%;
                margin: 0 auto;
                position: relative;
              }
              #search-form input {
                width: 100%;
                font-size: 1.5rem;
                padding: 10px 15px;
                border: 2px solid #ccc;
                border-radius: 2px;
              }
              #search-form button {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                background-color: transparent;
                outline: none;
                border: none;
                width: 3rem;
                text-align: center;
                font-size: 1.75rem;
                cursor: pointer;
                color: #333;
              }
              .info {
                margin-top: 0.5rem;
                text-align: center;
                font-size: 0.75rem;
              }
              
              @media (max-width: 1200px) {
                #search-form { width: 50%; }
              }
              @media (max-width: 768px) {
                .container { padding: 30px 35px; }
                #search-form { width: 100%; }
                .info { font-size: 0.5rem; }
              }</style>

            <form action="https://www.google.com/search" method="get" target="_blank" id="search-form">
              <input name="q" type="text" placeholder="Search Google..." autocomplete="off" autofocus>
              <!-- <button type="button"><i class="fas fa-microphone"></i></button> -->
            </form>
          
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124399.2447180017!2d77.59353181432566!3d13.005306315869976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1776601e4243%3A0x302fbc7a27c72337!2sIBM!5e0!3m2!1sen!2sin!4v1642330527228!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>IBM India Private Limited is the Indian subsidiary of IBM. IBM is extremely excited about enhancing its presence in Bangalore. IBM is increasing its branches in Bangalore and all over india. IBM employs more 2 lacks people in India. The IBM city sites are tailored to bring to your doorstep the global <br><br> technology expertise and experience of IBM - to deliver affordable solutions that address your business priorities.
              </p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="{{url('/uploadcontact')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="accordion">
              <li>
                  <a>Accordion Title One</a>
                  <div class="content">
                  <p>       </p>
                  </div>
              </li>
              <li>
                  <a>Second Title Here</a>
                  <div class="content">
                      </div>
              </li>
              <li>
                  <a>Accordion Title Three</a>
                  <div class="content">
                      </div>
              </li>
              <li>
                  <a>Fourth Accordion Title</a>
                  <div class="content">
                     </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Happy Customers</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="2">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="3">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="4">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="5">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
            
            
            
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>







<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
      box-sizing: border-box;
    }

    .header {
      background-color: black;
      padding: 10px;
      text-align: center;
    }

    .part {
      float: left;
      width: 25%;
      padding: 10px;
    }

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: red;
    }

    .fa {
      padding: 10px;
      font-size: 30px;
      width: 50px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 30%;
    }

    .fa:hover {
      opacity: 0.7;
    }


    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }

    .fa-google {
      background: #dd4b39;
      color: white;
    }

    .fa-linkedin {
      background: #007bb5;
      color: white;
    }

    .fa-youtube {
      background: #bb0000;
      color: white;
    }

    .fa-instagram {
      background: #125688;
      color: white;
    }



    .fa-snapchat-ghost {
      background: #fffc00;
      color: white;
      text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }

    .fa-skype {
      background: #00aff0;
      color: white;
    }

    .fa-android {
      background: #a4c639;
      color: white;
    }





    .fa-yahoo {
      background: #430297;
      color: white;
    }

  </style>
</head>

<body>
<footer>
  <div class="header">
    <h1> </h1>
  </div>
  <div class="row">

   
    <div class="footer">
      <h4> E-SHOP </h4>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
        


        

            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>

            <a href="#" class="fa fa-snapchat-ghost"></a>
            <a href="#" class="fa fa-skype"></a>
            <a href="#" class="fa fa-android"></a>


            <a href="#" class="fa fa-yahoo"></a>

            <br>

          </div>
        </div>
      </div>
    </div>
</footer>
  </body>

</html>