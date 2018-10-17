<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HIMALKOM</title>

	<link rel="icon" type="image/png" href="{{ asset('user/img/logohimalkom.jpg') }}"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/owl.theme.default.css') }}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- <header id="home">
		<div class="bg-img" style="background-image: url('user/img/background1.jpg');">
			<div class="overlay"></div>
		</div> -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="{{ route('home') }}">
							<img class="logo" src="{{ asset('user/img/logohimalkom.jpg') }}" alt="logo">
							<img class="logo-alt" src="{{ asset('user/img/logohimalkom.jpg') }}" alt="logo">
						</a>
					</div>
					<div class="nav-collapse">
						<span></span>
					</div>
				</div>
				<ul class="main-nav nav navbar-nav navbar-right">
					<!-- <li><a href="#home">Home</a></li> -->
					<li><a href="#portfolio">Pasangan Calon</a></li>
					<li>
							<a class="dropdown-item" href="{{ route('logout') }}"
								 onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
							</form>
					</li>
				</ul>
			</div>
		</nav>
		@if (\App\User::find(\Auth::user()->id)->pilihan == NULL)
			<!-- <div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="home-content">
								<h1 class="white-text">PEMIRA HIMALKOM Periode 2018/2019</h1>
								<p class="white-text">Silakan Pilih Sesuai Dengan Hati dan Keputusan Anda!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		@else
			<!-- <div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="home-content">
								<h1 class="white-text">PEMIRA HIMALKOM Periode 2018/2019</h1>
								<p class="white-text">Terima kasih anda telah memilih.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		@endif

	<!-- </header> -->
	@if (\App\User::find(\Auth::user()->id)->pilihan == NULL)
		<div id="portfolio" class="section md-padding bg-grey">
			<div class="container">
				<div class="row">
					<div class="section-header text-center">
						<h2 class="title">Pasangan Calon ketua dan wakil ketua Himalkom</h2>
					</div>
					@foreach($paslons as $paslon)
						<div class="col-md-4 col-xs-6 work">
							<img class="img-responsive" src="{{ asset($paslon->image)}}" alt="">
							<div class="overlay"></div>
							<div class="work-content">
								<h3>{{ $paslon->nomerurut }}</h3>
								<h3>Ketua : {{ $paslon->namaketua }}</h3>
								<h3>Wakil Ketua : {{ $paslon->namawakilketua }}</h3>
								<div class="work-link">
									<a href="{{route('user.pilih', ['paslon_id' => $paslon->id])}}"><i>PILIH</i></a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		@else
		<div id="portfolio" class="section md-padding bg-grey">
			<div class="container">
				<div class="row">
					<div class="section-header text-center">
						<h2 class="title">Pasangan Calon ketua dan wakil ketua Himalkom</h2>
					</div>
					<p style="text-align:center;">Terimkasih Telah Menggunakan Hak Suara Anda</p>
				</div>
			</div>
		</div>
	@endif

	<footer id="footer" class="sm-padding bg-dark">
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<div class="footer-logo">
						<a href="index.html"><img src="{{ asset('user/img/logohimalkom.jpg') }}" alt="logo"></a>
					</div>
					<div class="footer-copyright">
						<p>{{ Auth::User()->name }} - {{ Auth::user()->nim }}</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div id="back-to-top"></div>
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('user/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.magnific-popup.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/main.js') }}"></script>

</body>

</html>
