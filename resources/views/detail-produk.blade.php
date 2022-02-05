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

	<!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <!-- Trix Editor -->
</head>


<body>
	<!-- start header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
			    <div id="logo">
					<img src="/img/2.png" alt="" width="70px">
			    </div>
			    <nav id="nav-menu-container"><!-- #nav-menu-container -->	
				    <ul class="nav-menu">
				      	<li class="menu-active"><a href="/">Home</a></li>
				    </ul>
				</nav>	    		
			</div>
		</div>
	</header>

<!-- start section 4 (Overview part 1) -->
<!-- Section Header -->
<section class="banner-area" id="home">	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-10">
					<br><br><br>
					<h5 class="text-white text-uppercase">Detail Produk yang Disewakan</h5>
					<h1 class="cd-headline clip is-full-width">
						<span>Detail</span>
						<span class="cd-words-wrapper">
							<b class="is-visible">Product</b>
							<b>Product</b>
							<b>Product</b>
							<b>Product</b>
							<b>Product</b>
							<b>Product</b>
						</span>
					</h1>
					<br>
				</div>											
			</div>
		</div>
	</section>
<!-- End Section Header -->


	<section class="home-about-area">
        @foreach ($details as $data)
		<div class="container-fluid">				
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="{{asset('storage/'.$data->foto)}}" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>{{$data->tipe}}</h1>
					<p>{!!$data->keterangan!!}</p>
					
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