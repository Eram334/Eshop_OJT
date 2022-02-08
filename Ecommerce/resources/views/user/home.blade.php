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
          <a class="navbar-brand" href=""><h2>e <em>Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
              <a class="nav-link" href="/pro">Our Products</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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

<script>
const searchForm = document.querySelector("#search-form");
const searchFormInput = searchForm.querySelector("input"); // <=> document.querySelector("#search-form input");
const info = document.querySelector(".info");

// The speech recognition interface lives on the browser’s window object
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition; // if none exists -> undefined

if(SpeechRecognition) {
  console.log("Your Browser supports speech Recognition");
  
  const recognition = new SpeechRecognition();
  recognition.continuous = true;
  // recognition.lang = "en-US";

  searchForm.insertAdjacentHTML("beforeend", '<button type="button"><i class="fas fa-microphone"></i></button>');
  searchFormInput.style.paddingRight = "50px";

  const micBtn = searchForm.querySelector("button");
  const micIcon = micBtn.firstElementChild;

  micBtn.addEventListener("click", micBtnClick);
  function micBtnClick() {
    if(micIcon.classList.contains("fa-microphone")) { // Start Voice Recognition
      recognition.start(); // First time you have to allow access to mic!
    }
    else {
      recognition.stop();
    }
  }

  recognition.addEventListener("start", startSpeechRecognition); // <=> recognition.onstart = function() {...}
  function startSpeechRecognition() {
    micIcon.classList.remove("fa-microphone");
    micIcon.classList.add("fa-microphone-slash");
    searchFormInput.focus();
    console.log("Voice activated, SPEAK");
  }

  recognition.addEventListener("end", endSpeechRecognition); // <=> recognition.onend = function() {...}
  function endSpeechRecognition() {
    micIcon.classList.remove("fa-microphone-slash");
    micIcon.classList.add("fa-microphone");
    searchFormInput.focus();
    console.log("Speech recognition service disconnected");
  }

  recognition.addEventListener("result", resultOfSpeechRecognition); // <=> recognition.onresult = function(event) {...} - Fires when you stop talking
  function resultOfSpeechRecognition(event) {
    const current = event.resultIndex;
    const transcript = event.results[current][0].transcript;
    
    if(transcript.toLowerCase().trim()==="stop recording") {
      recognition.stop();
    }
    else if(!searchFormInput.value) {
      searchFormInput.value = transcript;
    }
    else {
      if(transcript.toLowerCase().trim()==="go") {
        searchForm.submit();
      }
      else if(transcript.toLowerCase().trim()==="reset input") {
        searchFormInput.value = "";
      }
      else {
        searchFormInput.value = transcript;
      }
    }
    // searchFormInput.value = transcript;
    // searchFormInput.focus();
    // setTimeout(() => {
    //   searchForm.submit();
    // }, 500);
  }
  
  info.textContent = 'Voice Commands: "stop recording", "reset input", "go"';
  
}
else {
  console.log("Your Browser does not support speech Recognition");
  info.textContent = "Your Browser does not support Speech Recognition";
}</script>
  <p class="info"></p>

          </div>
         

        </div> 
        
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
          
          
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Banner Ends Here -->

  @include('user.product')

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Eshop Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p>
            Eshop is a one stop shop for all your fashion and lifestyle needs. Being India's largest e-commerce store for fashion and lifestyle products, Myntra aims at providing a hassle free and enjoyable shopping experience to shoppers across the country with the widest range of brands and products on its portal. The brand is making a conscious effort to bring the power of fashion to shoppers with an array of the latest and trendiest products available in the country.</p>
              <ul class="featured-list">
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Home and Living</a></li>
                <li><a href="#">All style dress available </a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/ezgif-5-f32fe97448.gif" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; E- <em>shop</em> Products</h4>
                  <p>Get Unique Styles From Top Brands Like H&M, HRX And More. Shop Your Favorite Look Now.</p>
                </div>
                <div class="col-md-4">
                  <a href="{{url('/submit')}}" class="filled-button">Purchase Now</a>
                </div>
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
            <i>  <p style="text-transform: lowercase;color:rgb(80, 73, 73);">Copyright &copy; developed by E-shop team's.</i>
      
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


<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?50263';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#3cb71a",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Eshop",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.thaieshoppro.com%2Fdemoen%2Findex.php%2Fcosmetics%2Fmz-bs001&psig=AOvVaw1Yanjs8aq8o6P6dWHH1Ddh&ust=1641207522046000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMD8lNb0kvUCFQAAAAAdAAAAABAJ",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question ?",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"916290866465"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>


  </body>

</html>

<html>

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
