<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>AdashiApp</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- style css -->
<link rel="stylesheet" href="{{ asset('css/adashistyle.css') }}">
<!-- Responsive-->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<!-- fevicon -->
<link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
<!-- Tweaks for older IEs-->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
  <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader --> 
<!-- header -->
<header> 
  <!-- header inner -->
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
        <div class="full">
          <div class="center-desk">
            <div class="logo"> <a href="{{ url('/dashboard') }}"><h2 style="color:brown; margin-top:30px;">AdashiApp</h2></a> </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
        <div class="menu-area">
          <div class="limit-box">
            <nav class="main-menu">
             
                @if(Route::has('login'))
                <ul class="menu-area-main">
                    @auth
                        <li> <a href="{{ url('/dashboard') }}">Dashboard</a> </li>  
                    @else
                        <li> <a href="{{ route('login') }}">Login</a> </li>
                    @if(Route::has('register'))
                        <li> <a href="{{ route('register') }}">Register</a> </li>
                        @endif
                    @endauth
                </ul>
                @endif

            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header inner --> 
</header>
<!-- end header -->
<section class="slider_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6"> 
        <!-- state banner -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="first-slide" src="images/money.jpg" alt="First slide"> </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <i class='fa fa-anjgle-right'></i></a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <i class='fa fa-angjle-left'></i></a> </div>
        
          <!-- end banner --> 
      </div>
      <div class="col-md-6">
        <div class="full-slider_cont">
          <h1>World ‘s popular<br>
            <span class="dark_brown">Adashi company</span></h1>
          <p>It is a long established fact that a reader will be distracted by the <br>
            readable content of a page when looking at its layout. The point <br>
            of using Lorem Ipsum is that it has a more-or-less normal dis<br>
            tribution of letters, as opposed to using 'Content here, content<br>
            here', making it look like readable English. Many desktop<br>
            publishing packages and more-or-less normal distribution of <br>
            letters, as opposed to using 'Content here, content here', making<br>
            it look like readable English. Many desktop publishing packages and </p>
          <div class="button_section"><a class="main_bt" href="#">About Us</a> </div>
        </div>
      </div>
    </div>
  </div>
</section><br><br>
<!-- Currency -->

<!-- end Currency --> 
<!--state abouts -->
<div class="abouts"> <div class="abouts-bg">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="abouts-us">
          <h3>About Us <strong class="cur">our company</strong></h3>
          <p>Our company offers potential enterprenuers who have the idea of starting their own business but has been unable to save enough money the avenue to save their money. Withdrawal can be done at any given time. A user can also transfer funds to another user via system if he or she pleases. our charge however is dependent of the a users first deposit. after that the user can withdraw any amount of time before the 30 days period expires</p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="abouts-us">
          <figure><img src="images/money2.jpg" alt="img"/></figure>
        </div>
      </div>
    </div>
  </div>
  </div> </div><br><br>

<!-- footer -->
<footer>
  <div class="copyright">
    <div class="container">
      <p>Onuh Sani</a></p>
    </div>
  </div>
</footer>
<!-- end footer --> 
<!-- Javascript files--> 
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/popper.min.js') }}"></script> 
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> 
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script> 
<script src="{{ asset('js/plugin.js') }}"></script> 

<!-- sidebar --> 
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script> 
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>