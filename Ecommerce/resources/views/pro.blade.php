<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
          <a class="navbar-brand" href=""><h2>E <em>Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/pro')}}">Our Products</a>
              </li>
                
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
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>E-shop products</h2>
              
            </div>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;
  /* background-color: #025677; */
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

 nav{
    margin-top:-30px;
  }
  * {box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
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
      </div>
    </div>

{{--     
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Man</li>
                  <li data-filter=".dev">Women</li>
                  <li data-filter=".gra">Kids</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$18.25</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$16.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (24)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$32.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (36)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$24.60</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (48)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$18.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (60)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$12.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (72)</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div> --}}
          {{-- <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> --}}

    
    {{-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Eshop Team.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
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


  </body>

</html> --}}

<div class="img-zoom-container">
  <img id="myimage" src="data:image/jpeg;base64,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" width="300" height="240" alt="Girl">
  <div id="myresult" class="img-zoom-result"></div>
</div>
<script>
  function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /* Create lens: */
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /* Insert lens: */
  img.parentElement.insertBefore(lens, img);
  /* Calculate the ratio between result DIV and lens: */
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /* Set background properties for the result DIV */
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /* Execute a function when someone moves the cursor over the image, or the lens: */
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /* And also for touch screens: */
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    /* Calculate the position of the lens: */
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /* Prevent the lens from being positioned outside the image: */
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /* Set the position of the lens: */
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /* Display what the lens "sees": */
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>

<script>
imageZoom("myimage", "myresult");
</script>



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
