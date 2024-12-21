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
				<div class="col-md-5 col-md-push-1 animate-box" style="background-image: url({{ asset('landing/images/gb_reg.png') }} ); min-height: 250px;">
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
					<div class="work"  style="background-image: url({{ asset('landing/images/p1.jpg') }} );">
						<div class="desc">
							<h3>Tungku</h3>
							<span>Gerabah</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="work" style="background-image: url({{ asset('landing/images/p2.jpg') }} );">
						<div class="desc">
							<h3>Pot</h3>
							<span>Gerabah</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="work" style="background-image: url({{ asset('landing/images/p3.jpg') }} );">
						<div class="desc">
							<h3>Guci</h3>
							<span>Gerabah</span>
						</div>
					</div>
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
	                <img src="{{ asset('landing/images/yumarlin1.jpg') }}" alt="Bumarlin" class="rounded-circle">
	                <h4>Yumarlin MZ S.Kom., M.Pd., M.Kom.</h4>
	                <p>Dosen Pembimbing</p>
	            </div>
	            <div class="col-md-6 team-member animate-box">
	                <img src="{{ asset('landing/images/Narsum.png') }}" alt="Narsum" class="rounded-circle">
	                <h4>Satrio Bagas P</h4>
	                <p>Narasumber</p>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-4 team-member animate-box">
	                <img src="{{ asset('landing/images/aden.png') }}" alt="Diana" class="rounded-circle">
	                <h4>Aden Bagas Carera</h4>
	                <p>19330067</p>
	            </div>
	            <div class="col-md-4 team-member animate-box">
	                <img src="{{ asset('landing/images/adam.jpg') }}" alt="Andi" class="rounded-circle">
	                <h4>Adam Nur Ardhi</h4>
	                <p>23330038</p>
	            </div>
	            <div class="col-md-4 team-member animate-box">
	                <img src="{{ asset('landing/images/seto.jpeg') }}" alt="Siti" class="rounded-circle">
	                <h4>Seto Andika N</h4>
	                <p>21330004</p>
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
						<li><i class="icon-phone3"></i>+62 821-1110-3007</li>
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