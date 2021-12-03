<!DOCTYPE html>

<html>

<head>
	<link rel="shortcut icon" href="/img/logo2.png">
	<title>Cahaya Rent</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="/css/linearicons.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<link rel="stylesheet" href="/css/nice-select.css">					
	<link rel="stylesheet" href="/css/animate.min.css">
	<link rel="stylesheet" href="/css/animate-text.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/main.css">
	<link href="/fontawesome/css/fontawesome.css" rel="stylesheet">
  	<link href="/fontawesome/css/brands.css" rel="stylesheet">
  	<link href="/fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/003603851d.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class=""></div>
	<!-- start header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
			    <div id="logo">
			        <a href="../PAD1"><img src="/img/Dark Logotype 2.png" width="130" height="25"></a>
			    </div>
			    <nav id="nav-menu-container"><!-- #nav-menu-container -->	
				    <ul class="nav-menu">
				      	<li class="menu-active"><a href="#home">Home</a></li>
						<li><a href="#aboutus">About Us</a></li>
						<li><a href="#product">Product</a></li>
						<li><a href="#dokumentasi">Gallery</a></li>
						<li><a href="#maps">Maps / WhatsApp</a></li>
				       	<li><a href="#reviews">Testimoni</a></li>
						<li><a href="#faq">FAQ</a></li>
						<li><a href="#feedback">Feedback</a></li>
				    </ul>
				</nav>	    		
			</div>
		</div>
	</header>
	<!-- End header Area -->

	<!-- start section 1 (banner Area) -->
	<section class="banner-area" id="home">	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-10">
					<br><br><br>
					<h5 class="text-white text-uppercase">Tempat Penyewaan Komputer</h5>
					<h1 class="cd-headline clip is-full-width">
						<span>Cahaya</span>
						<span class="cd-words-wrapper">
							<b class="is-visible">Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
						</span>
					</h1>
					<br>
				</div>											
			</div>
		</div>
	</section>
	<!-- end section 1 (banner Area) -->

	<!-- start section 2 (About Us) -->
	<section class="service-area section-gap" id="aboutus">	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<h1>CAHAYA RENT</h1>
				<p>Sewa Laptop, Komputer, Projector, TV, Printer, dan Multimedia</p>
			</div>
		</div>
		</div>
		<div>
			<center>
				<img class="img-fluid" src="/img/aboutuscahaya.png" width="100%" height="100%">
			</center>
		</div>
		<div class="row services">
			@foreach ($data_about as $about)
			<div class="col-md-4">
				<div class="servicee">
					<div class="icon-holder"><img src="{{asset('storage/'.$about->icon)}}"></div>
					<h4 class="heading">{{$about->head}}</h4>
					<p class="description">{{$about->deskripsi}}</p>
				</div>
			</div>
			@endforeach
		</div>
	</section>
	<!-- end section 2 (About Us) -->
	
	<!-- start section 3 (Product) -->
	<section class="top-course-area section-gap" id="product">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<center>
						<h1>Product</h1>
					</center>
				</div>
			</div>
			<div class="row services">
				@foreach ($data_produk as $produk)
				<div class="col-md-4"><div class="service">
					<div class="icon-holder"><img src="{{asset('storage/'.$produk->icon)}}"></div>
					<h4 class="heading">{{$produk->jenis}}</h4>
					<p class="description">{{$produk->deskripsi}}</p>
					<br><br><br>
					<form action="{{route ('detail.produk', $produk->produk_seo)}}"><button type="submit" class="btn">Detail</button></form>
				</div></div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- end section 3 (Product) -->

	<!-- start section 4 (Dokumentasi) -->	
	<section class="unique-feature-area section-gap" id="dokumentasi">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10 text-white">DOKUMENTASI PENYEWAAN</h1>
						<p>Dokumentasi Jasa Penyewaan Cahaya Rent di Beberapa Tempat</p>
					</div>
				</div>
			</div>

			@foreach ($data_dok as $dok)
			<div class="col-md-12 col-xs-6 work">
				<img class="img-responsive single-unique-product" src="{{asset('storage/'.$dok->foto)}}" alt="#">
				<div class="overlay single-unique-product"></div>
				<div class="work-content">
					<h1>{{$dok->judul}}</h1>
					<p>{{$dok->tanggal}}</p>
				</div>
			</div>
			<br>
			@endforeach
		</div>
	</section>
	<!-- end section 4 (Dokumentasi) -->
	
	<br><br><br>	
			
	<!-- start section 5 (Maps) -->	
	<section class="video-sec-area section-gap" id="maps">
		<div class="container">
			<div class="row justify-content-center align-items-center ">
				<div class="col-lg-6 video-left">
					<h6>Let's Find Us!</h6>
					<h1>
						Cahaya Rent
						<br>
						on Google Maps
					</h1>

					@foreach ($data_maps as $maps)
					<p><span>{{$maps->alamat}}</span></p>
					<p>{{$maps->no_telp}}</p>
					<a class="primary-btn" href="{{$maps->link}}" target="_blank">Let's Find Us!</a>
					<br><br>
					@endforeach

					@foreach ($data_wa as $wa)
					<a class="primary-btn" href="{{$wa->link_wa}}" target="_blank">Chat WhatsApp</a>
					<br><br>
					@endforeach


				</div>
				<div class="col-lg-6 video-right justify-content-center align-items-center d-flex" style="cursor:pointer" data-reveal-id="videoModal" onclick="$('#vgIframe')[0].src += '?autoplay=1&amp;rel=0&amp;showinfo=0&amp;ecver=1';">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d516.9036541060482!2d109.14454140802867!3d-6.866719834978294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7809710c92d%3A0xc9331cd405870c70!2sGg.%2028%20No.9%2C%20Panggung%2C%20Kec.%20Tegal%20Tim.%2C%20Kota%20Tegal%2C%20Jawa%20Tengah%2052122!5e0!3m2!1sid!2sid!4v1635836436387!5m2!1sid!2sid" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>	
	</section>
	<!-- end section 5 (Maps) -->
		
	<!-- start section 6 (Reviews Area) -->
	<section class="review-area section-gap" id="reviews">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Testimoni</h1>
					</div>
				</div>
			</div>						
			<div class="row">
				@foreach ($data_review as $review)	
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>{{$review->nama}}</h4>
						<p>{{$review->review}}</p>
						<div class="star">
							<script>
								$isi = "{{$review->rating}}";
								$kosong = 5 - $isi;
								for($i = 0; $i < $isi; $i++){
									document.write ("<span class='fa fa-star checked'></span>");
								}
								for($k = 0; $k < $kosong; $k++){
									document.write ("<span class='fa fa-star'></span>");
								}
							</script>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>	
	</section>
	<!-- end section 6 (Reviews Area) -->
	
	<!-- start section 7 (FAQ) -->
	<section class="faq-area section-gap" id="faq">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">F A Q</h1>
						<p>Cempaka Rent</p>
					</div>
				</div>
			</div>						
			<div class="row justify-content-start">
				<div class="col-lg-6 faq-left">
					<div id="accordion">
						<?php
							$dbHost = 'localhost';
							$dbName = 'db_cahaya';
							$dbUsername = "root";
							$dbPassword = "";
						
							try{
								$dbConn = new PDO ("pgsql:host={$dbHost};dbname={$dbName}", $dbUsername, $dbPassword);
								$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							}
							catch(PDOException $e){
								echo $e -> getMessage();
							}
							$sql = "SELECT * FROM tb_faq ORDER BY id";
							$result = $dbConn -> prepare($sql);
							$result -> execute();
							$huruf = array("zero", "One", "Two", "Three", "Four", "Five");
							while($row = $result -> fetch(PDO::FETCH_ASSOC)){
								echo "<div class='card'>";
								echo "<div class='card-header' id='heading".$huruf[$row['id']]."'>";
								echo "<h5 class='mb-0'>";
								echo "<button class='btn btn-link' data-toggle='collapse' data-target='#collapse".$huruf[$row['id']]."' aria-expanded='true' aria-controls='collapse".$huruf[$row['id']]."'>";
								echo $row['pertanyaan'];
								echo "</button></h5></div>";
								echo "<div id='collapse".$huruf[$row['id']]."' class='collapse' aria-labelledby='heading".$huruf[$row['id']]."' data-parent='#accordion'><div class='card-body'>";
								echo $row['jawaban'];
								echo "</div></div></div>";
							}
						?>			
					
					<!-- @foreach ($data_faq as $faq)
						<script>
							var huruf = array("zero", "One", "Two", "Three", "Four", "Five");
							$pertanyaan = "{{$faq->pertanyaan}}";
							$jawaban = "{{$faq->jawaban}}";
								document.write ("<div class='card'>");
								document.write ("<div class='card-header' id='heading"+huruf['{{$faq->id}}']+"'>");
								document.write ("<h5 class='mb-0'>");
								document.write ("<button class='btn btn-link' data-toggle='collapse' data-target='#collapse"+huruf['{{$faq->id}}']+"' aria-expanded='true' aria-controls='collapse"+huruf['{{$faq->id}}']+"'>"+$pertanyaan+"</button></h5></div>")
								document.write ("<div id='collapse"+huruf['{{$faq->id}}']+"' class='collapse' aria-labelledby='heading"+huruf['{{$faq->id}}']+"' data-parent='#accordion'><div class='card-body'>"+$jawaban+"</div></div></div>")
						</script>	
					@endforeach		 -->
					
					
						<!-- @foreach ($data_faq as $faq)
						<div class="card">
							<div class="card-header" id='heading"{{$faq->id}}"'>
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target='#collapse"{{$faq->id}}"' aria-expanded="true" aria-controls='collapse"{{$faq->id}}"'>{{$faq->pertanyaan}}</button>
								</h5>
							</div>
							<div id="collapse" class='collapse"{{$faq->id}}"' aria-labelledby='heading"{{$faq->id}}"' data-parent="#accordion"> <div class="card-body">{{$faq->jawaban}}</div> </div>
						</div>
						@endforeach -->
						
					</div>							
				</div>	
			</div>
		</div>	
	</section>
	<!-- end section 7 (FAQ) -->

			
	<!-- start footer Area (Contact) -->		
	<footer class="footer-area section-gap" id="feedback">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="single-footer-widget">
						<h6>Cahaya Rent</h6>
						<p class="footer-text">
							Copyright &copy;
							<script>
								document.write(new Date().getFullYear());
							</script>
							Cahaya Rent.
							<br>
							This Website is made with
							<i class="fa fa-heart-o" aria-hidden="true"></i><br>
							by Cahaya Rent.
						</p>
					</div>
				</div>
				<div class="col-lg-6  col-md-4 col-sm-12">
					<div class="single-footer-widget">
						<h6>Feedback</h6>
						<p>Give your feedback</p>
						<div class="" id="mc_embed_feedback">
							@foreach ($data_email as $email)
							<a class="primary-btn" href="{{$email->link_email}}" target="_blank">Feedback to Email</a>
							<br><br>
							@endforeach
						</div>
					</div>
				</div>												
			</div>
		</div>
	</footer>
	<!-- End footer Area (Contact) -->	

	<script src="/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="/js/vendor/bootstrap.min.js"></script>
  	<script src="/js/easing.min.js"></script>			
	<script src="/js/hoverIntent.js"></script>
	<script src="/js/superfish.min.js"></script>	
	<script src="/js/jquery.ajaxchimp.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/animate-text.js"></script>
	<script src="/js/owl.carousel.min.js"></script>			
	<script src="/js/jquery.sticky.js"></script>
	<script src="/js/jquery.nice-select.min.js"></script>			
	<script src="/js/parallax.min.js"></script>	
	<script src="/js/mail-script.js"></script>	
	<script src="/js/main.js"></script>	
</body>

</html>