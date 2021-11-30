<!DOCTYPE html>

<html>

<head>
	<link rel="shortcut icon" href="{{asset('img/logo2.png')}}">
	<title>Cahaya Rent</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">					
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate-text.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link href="{{asset('fontawesome/css/fontawesome.css')}}" rel="stylesheet">
  	<link href="{{asset('fontawesome/css/brands.css')}}" rel="stylesheet">
  	<link href="{{asset('fontawesome/css/solid.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/003603851d.js" crossorigin="anonymous"></script>
</head>


<body>
	<!-- start header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
			    <div id="logo">
					<a href="../PAD1"><img src="{{asset('img/Dark Logotype 2.png')}}" width="130" height="25"></a>
			    </div>
			    <nav id="nav-menu-container"><!-- #nav-menu-container -->	
				    <ul class="nav-menu">
				      	<li class="menu-active"><a href="/master">Home</a></li>
				    </ul>
				</nav>	    		
			</div>
		</div>
	</header>

<!-- start section 4 (Overview part 1) -->
<div class="container">
<div class="row d-flex justify-content-center" id="overview">
		<div class="col-md-8 pb-40 header-text">
			<center>
				<h1>Detail Product Laptop</h1>
			</center>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<center><img src="{{asset('img/HP/hero-img.jpg')}}"></center>
	</div>
</div>
	<section class="home-about-area">
        @foreach ($details as $data)
		<div class="container-fluid">				
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="{{asset('images/'.$data->foto)}}" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>{{$data->tipe}}</h1>
					<p>
					{{$data->keterangan}}
					</p>
				</div>
			</div>
		</div>
        @endforeach	
	</section>

	<!-- end section 4 (Overview part 1) -->		
	<script src="{{asset ('js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="{{asset ('js/vendor/bootstrap.min.js') }}"></script>
  	<script src="{{asset ('js/easing.min.js') }}"></script>			
	<script src="{{asset ('js/hoverIntent.js') }}"></script>
	<script src="{{asset ('js/superfish.min.js') }}"></script>	
	<script src="{{asset ('js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{asset ('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{asset ('js/animate-text.js') }}"></script>
	<script src="{{asset ('js/owl.carousel.min.js') }}"></script>			
	<script src="{{asset ('js/jquery.sticky.js') }}"></script>
	<script src="{{asset ('js/jquery.nice-select.min.js') }}"></script>			
	<script src="{{asset ('js/parallax.min.js') }}"></script>	
	<script src="{{asset ('js/mail-script.js') }}"></script>	
	<script src="{{asset ('js/main.js') }}"></script>	
</body>

</html>