@extends('layouts.app')

@section('content')
	<section class="hero" id="beranda" aria-label="Beranda CIHOPRINTSHOP ">
		<img class="hero-image" data-machine-image="{{ asset('images/ciho-printing-machine.jpg') }}" src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin cetak digital CIHOPRINTSHOP" fetchpriority="high">
		<div class="hero-shade" aria-hidden="true"></div>
		<div class="hero-inner">
			<div class="hero-copy" aria-live="polite">
				<p class="eyebrow" id="slide-eyebrow">Solusi digital printing terpercaya</p>
				<h1 id="slide-title"><span id="slide-title-main">CIHO</span><br><span class="accent" id="slide-title-accent">Digital Printing</span></h1>
				<p class="hero-description" id="slide-description" hidden></p>
				<div class="hero-services" id="slide-services" hidden>
					<div><span>01</span><strong>Digital Printing</strong></div>
					<div><span>02</span><strong>Large Format</strong></div>
					<div><span>03</span><strong>Stiker &amp; Kemasan</strong></div>
				</div>
				<div class="hero-actions">
					<a class="button" id="primary-action" data-about-url="{{ route('about') }}" data-contact-url="{{ route('contact') }}" href="{{ route('about') }}"><span id="primary-action-label">Tentang Kami</span> <span class="button-arrow" aria-hidden="true">→</span></a>
					<a class="button-secondary" href="{{ route('project') }}">Lihat Hasil Kami <span class="button-arrow" aria-hidden="true">→</span></a>
				</div>
				<div class="slider-controls" aria-label="Kontrol slide beranda">
					<button class="slider-arrow" type="button" data-direction="previous" aria-label="Slide sebelumnya">‹</button>
					<div class="slider-dots" role="group" aria-label="Pilih slide">
						<button class="slider-dot" type="button" aria-label="Slide 1" aria-current="true"></button>
						<button class="slider-dot" type="button" aria-label="Slide 2" aria-current="false"></button>
						<button class="slider-dot" type="button" aria-label="Slide 3" aria-current="false"></button>
					</div>
					<button class="slider-arrow" type="button" data-direction="next" aria-label="Slide berikutnya">›</button>
				</div>
			</div>
		</div>
		<p class="slide-count"><strong id="current-slide">01</strong> / 03</p>
		<a class="scroll-cue" href="{{ route('about') }}" aria-label="Lihat informasi tentang CIHOPRINTSHOP">?</a>
		<span class="sr-only" id="slide-announcement" aria-live="polite"></span>
	</section>
	<div class="home-ticker" role="region" aria-label="Layanan dan produk cetak CIHO">
		<div class="ticker-track">
			<div class="ticker-group">
				<span>Sticker</span><i aria-hidden="true">✦</i><span>Kaos Custom</span><i aria-hidden="true">✦</i><span>Brosur</span><i aria-hidden="true">✦</i><span>Packaging</span><i aria-hidden="true">✦</i><span>Neon Box</span><i aria-hidden="true">✦</i><span>Banner</span><i aria-hidden="true">✦</i>
			</div>
			<div class="ticker-group" aria-hidden="true">
				<span>Sticker</span><i>✦</i><span>Kaos Custom</span><i>✦</i><span>Brosur</span><i>✦</i><span>Packaging</span><i>✦</i><span>Neon Box</span><i>✦</i><span>Banner</span><i>✦</i>
			</div>
		</div>
	</div>

	<section class="home-services" id="layanan-utama">
		<div class="page-wrap">
			<div class="home-section-heading">
				<div>
					<p class="eyebrow"><span></span> Layanan utama</p>
					<h2>Cetak untuk banyak<br><span class="accent">kebutuhan.</span></h2>
				</div>
				<p class="home-section-lead">Dari materi promosi hingga kemasan produk, pilih layanan yang sesuai dengan ide dan kebutuhan Anda.</p>
			</div>
			<div class="home-service-list">
				<article class="home-service-item">
					<span class="home-item-number">01</span>
					<div><h3>Digital printing</h3><p>Brosur, kartu nama, flyer, undangan, dan kebutuhan cetak harian.</p></div>
					<a href="{{ route('contact') }}" aria-label="Tanyakan layanan digital printing">↗</a>
				</article>
				<article class="home-service-item">
					<span class="home-item-number">02</span>
					<div><h3>Large format</h3><p>Spanduk, banner, poster, dan materi promosi berukuran besar.</p></div>
					<a href="{{ route('machines') }}" aria-label="Lihat mesin produksi CIHO">↗</a>
				</article>
				<article class="home-service-item">
					<span class="home-item-number">03</span>
					<div><h3>Stiker, label & kemasan</h3><p>Label produk dan kemasan untuk kebutuhan usaha maupun personal.</p></div>
					<a href="{{ route('project') }}" aria-label="Lihat inspirasi hasil cetak">↗</a>
				</article>
			</div>
		</div>
		<div class="home-advantages">
			<div class="page-wrap home-advantages-inner">
				<p class="eyebrow"><span></span> Keunggulan CIHO</p>
				<div class="advantage-list">
					<div><strong>01</strong><span>Bisa konsultasi jenis bahan, ukuran, dan jumlah cetak.</span></div>
					<div><strong>02</strong><span>Melayani kebutuhan promosi, produk, acara, dan personal.</span></div>
					<div><strong>03</strong><span>Pilihan layanan cetak dalam satu tempat.</span></div>
				</div>
			</div>
		</div>
	</section>

	<section class="home-products" id="produk-populer">
		<div class="page-wrap">
			<div class="home-section-heading">
				<div>
					<p class="eyebrow"><span></span> Produk populer</p>
					<h2>Yang sering jadi<br><span class="accent">pilihan.</span></h2>
				</div>
				<a class="text-arrow" href="{{ route('project') }}">Jelajahi project <span aria-hidden="true">→</span></a>
			</div>
			<div class="popular-grid">
				<a class="popular-product" href="{{ route('contact') }}">
					<img src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Poster warna-warni untuk materi promosi" loading="lazy">
					<span>01 / PROMOSI</span><h3>Poster & flyer</h3><p>Materi promosi untuk brand dan acara.</p>
				</a>
				<a class="popular-product" href="{{ route('contact') }}">
					<img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Botol minum custom untuk merchandise" loading="lazy">
					<span>02 / MERCHANDISE</span><h3>Merchandise</h3><p>Produk custom untuk acara dan kebutuhan brand.</p>
				</a>
				<a class="popular-product" href="{{ route('contact') }}">
					<img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Buku catatan untuk stationery custom" loading="lazy">
					<span>03 / STATIONERY</span><h3>Notebook</h3><p>Stationery untuk hadiah atau kebutuhan kantor.</p>
				</a>
				<a class="popular-product" href="{{ route('contact') }}">
					<img src="https://images.unsplash.com/photo-1547887538-e3a2f32cb1cc?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Produk dengan kemasan dan label" loading="lazy">
					<span>04 / PRODUK</span><h3>Label & kemasan</h3><p>Detail cetak untuk melengkapi tampilan produk.</p>
				</a>
			</div>
			<div class="products-cta"><span>Memerlukan spesifikasi cetak khusus atau pemesanan skala besar?</span><a class="button" href="{{ route('contact') }}">Konsultasi Pemesanan <span class="button-arrow" aria-hidden="true">→</span></a></div>
		</div>
	</section>
@endsection
