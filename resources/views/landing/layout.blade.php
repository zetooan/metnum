<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gerabah Kasongan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<style>
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .rounded-circle {
            width: 150px; /* Atur lebar gambar */
            height: 150px; /* Atur tinggi gambar */
            border-radius: 50%; /* Membuat gambar menjadi bulat */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            margin-bottom: 10px; /* Memberikan jarak antara gambar dan teks */
        }
        .fh5co-light-grey {
            background-color: #f8f9fa; /* Warna latar belakang */
            padding: 50px 0; /* Padding atas dan bawah */
        }
    </style>

	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('landing/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('landing/css/flexslider.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('landing/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ asset('landing/js/respond.min.js') }}"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-4">
						<div id="fh5co-logo"><a href="/">Gerabah Kasongan</a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li><a href="/#fh5co-hero">Beranda</a></li>
							<li><a href="#tentang">Tentang</a></li>
							<li><a href="/#produk">Produk</a></li>
							<li><a href="/#kontak">Kontak</a></li>
							<!-- ini halaman untuk login -->
							@guest
							<li><a href="/#pengembang">Pengembang</a></li>
							<li><a href="/login">Login</a></li>
							@endguest
							@auth
							<li><a href="/hitung">Perhitungan</a></li>
							@can('admin')
							<li><a href="/user">User</a></li>
							@endcan
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							    @csrf
							</form>
							<li>
							    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							        Logout
							    </a>
							</li>
							@endauth
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	@yield('content')

		<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-6 fh5co-widget">
					<h4>Gerabah Kasongan</h4>
					<p>Kasongan dikenal sebagai pusat kerajinan gerabah yang kaya akan tradisi dan inovasi.</p>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="/#fh5co-hero">Beranda</a></li>
						<li><a href="#tentang">Tentang</a></li>
						<li><a href="/#produk">Produk</a></li>
						<li><a href="/#kontak">Kontak</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>Jl. Kasongan, Kajen, Bangunjiwo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta</li>
						<li>+62 821-1110-3007</li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2024 Universitas Janabadra</small>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('landing/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('landing/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('landing/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('landing/js/jquery.flexslider-min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('landing/js/magnific-popup-options.js') }}"></script>
	<!-- Counters -->
	<script src="{{ asset('landing/js/jquery.countTo.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('landing/js/main.js') }}"></script>

	</body>
</html>

