@extends('landing.layout')

@section('content')
<div class="container-wrap">
		<aside id="fh5co-hero" style="background-image: url({{ asset('landing/images/heroo.png') }}); background-size: cover; background-position: center;">
		    <div class="overlay-gradient"></div>
		    <div class="container-fluid">
		        <div class="row" style="padding-top: 100px;">
		            <div class="col-md-6 slider-text">
		                <div class="slider-text-inner">
		                    <h1 style="font-size: 48px; font-weight: bold;">Karya Tangan yang Berharga</h1>
		                    <h2 style="font-size: 18px; margin-bottom: 20px;">Dari tanah liat menjadi karya seni, kami menghidupkan tradisi dan budaya melalui kerajinan gerabah. Dukung UMKM lokal dan bawa pulang keindahan Kasongan ke rumah Anda.</h2>
		                </div>
		            </div>
		        </div>
		    </div>
		</aside>
		
		<div id="tentang">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading" style="padding-top: 50px;">
					<h2>Tentang Kami</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box" style="background-image: url({{ asset('landing/images/portfolio-1.jpg') }} ); min-height: 250px;">
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<h4>Gerabah Kasongan</h4>
					<p>Kasongan dikenal sebagai pusat kerajinan gerabah yang kaya akan tradisi dan inovasi. Dengan menggunakan teknik yang diwariskan dari generasi ke generasi, para pengrajin kami menciptakan berbagai produk gerabah yang tidak hanya fungsional tetapi juga memiliki nilai seni yang tinggi. Setiap karya kami adalah hasil dari dedikasi dan cinta terhadap seni, serta penghormatan terhadap alam dan sumber daya yang kami gunakan.</p>
				</div>
			</div>
		</div>

		<div id="produk" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading" style="padding-top: 50px;">
					<h2>Produk</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work"  style="background-image: url({{ asset('landing/images/portfolio-1.jpg') }} );">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url({{ asset('landing/images/portfolio-2.jpg') }} );">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url({{ asset('landing/images/portfolio-3.jpg') }} );">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div id="pengembang">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading" style="padding-top: 50px;">
					<h2>Pengembang</h2>
				</div>
			</div>
			<div class="row">
	            <div class="col-md-6 team-member animate-box">
	                <img src="{{ asset('landing/images/portfolio-1.jpg') }}" alt="Bumarlin" class="rounded-circle">
	                <h4>Yumarlin MZ S.Kom., M.Pd., M.Kom.</h4>
	                <p>Deskripsi singkat tentang Bumarlin. Pengembang yang berpengalaman dalam teknologi web.</p>
	            </div>
	            <div class="col-md-6 team-member animate-box">
	                <img src="{{ asset('landing/images/portfolio-2.jpg') }}" alt="Narsum" class="rounded-circle">
	                <h4>Narsum</h4>
	                <p>Deskripsi singkat tentang Narsum. Ahli dalam pengembangan aplikasi mobile.</p>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-4 team-member animate-box">
	                <img src="{{ asset('landing/images/portfolio-4.jpg') }}" alt="Diana" class="rounded-circle">
	                <h4>Aden</h4>
	                <p>Deskripsi singkat tentang Diana. Pengembang backend yang handal.</p>
	            </div>
	            <div class="col-md-4 team-member animate-box">
	                <img src="{{ asset('landing/images/portfolio-5.jpg') }}" alt="Andi" class="rounded-circle">
	                <h4>Adam</h4>
	                <p>Deskripsi singkat tentang Andi. Ahli dalam pengembangan sistem dan database.</p>
	            </div>
	            <div class="col-md-4 team-member animate-box">
	                <img src="{{ asset('landing/images/portfolio-6.jpg') }}" alt="Siti" class="rounded-circle">
	                <h4>Seto</h4>
	                <p>Deskripsi singkat tentang Siti. Pengembang front-end yang kreatif.</p>
	            </div>
	        </div>
		</div>

		<div id="kontak">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading" style="padding-top: 50px;">
					<h2>Kontak Kami</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box">
					<h3>Our Address</h3>
					<ul class="contact-info">
						<li><i class="icon-location4"></i>Jl. Kasongan, Kajen, Bangunjiwo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta</li>
						<li><i class="icon-phone3"></i>+ 1235 2355 98</li>
						<li><i class="icon-location3"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 col-md-push-1 animate-box">
					<div class="row">
						<div class="col-md-6">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.0686066937988!2d110.33424717388385!3d-7.845154577954818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a562f41028b81%3A0xb5dcffcbde487e78!2sJl.%20Kasongan%2C%20Kec.%20Kasihan%2C%20Kabupaten%20Bantul%2C%20Daerah%20Istimewa%20Yogyakarta%2055184!5e1!3m2!1sen!2sid!4v1733684406789!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

@endsection