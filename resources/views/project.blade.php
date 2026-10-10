@extends('layouts.app')

@section('title', 'Project')
@section('description', 'Jelajahi inspirasi produk digital printing untuk promosi, kemasan, dan kebutuhan personal.')

@section('content')
	<section class="content-page">
		<div class="page-hero page-hero-compact">
			<div class="page-wrap">
				<p class="eyebrow"><span></span> Project & inspirasi</p>
				<h1>Beragam ide,<br><span class="accent">siap jadi nyata.</span></h1>
				<p class="page-lead">Temukan inspirasi untuk materi promosi, kemasan produk, dan kebutuhan cetak lainnya.</p>
			</div>
		</div>
		<div class="page-wrap project-content">
			<div class="project-grid">
				<article class="project-card project-card-featured">
					<img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&amp;fit=crop&amp;w=1200&amp;q=85" alt="Peralatan desain dan warna untuk materi promosi" loading="lazy">
					<div class="project-caption"><span>01 / PROMOSI</span><h2>Materi promosi</h2><p>Poster, flyer, dan identitas brand.</p></div>
				</article>
				<article class="project-card">
					<img src="https://images.unsplash.com/photo-1547887538-e3a2f32cb1cc?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Produk dengan kemasan dan label" loading="lazy">
					<div class="project-caption"><span>02 / KEMASAN</span><h2>Kemasan & label</h2><p>Detail yang menjaga karakter produk.</p></div>
				</article>
				<article class="project-card">
					<img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Buku catatan dan stationery berwarna" loading="lazy">
					<div class="project-caption"><span>03 / STATIONERY</span><h2>Alat tulis custom</h2><p>Notebook dan kebutuhan kantor.</p></div>
				</article>
				<article class="project-card">
					<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Produk hadiah dengan presentasi yang rapi" loading="lazy">
					<div class="project-caption"><span>04 / MERCHANDISE</span><h2>Merchandise</h2><p>Item personal dan kebutuhan acara.</p></div>
				</article>
			</div>
			<div class="page-cta"><div><p class="eyebrow"><span></span> KONSULTASI PRODUKSI</p><h2>Siap mewujudkan kebutuhan cetak bisnis Anda?</h2></div><a class="button" href="{{ route('contact') }}">Konsultasi Pemesanan <span class="button-arrow" aria-hidden="true">→</span></a></div>
		</div>
	</section>
@endsection
