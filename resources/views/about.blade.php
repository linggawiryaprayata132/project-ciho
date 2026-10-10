@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('description', 'Kenali CIHOPRINTSHOP, partner digital printing untuk kebutuhan bisnis dan personal.')

@section('content')
	<section class="content-page">
		<div class="about-masthead">
			<div class="page-wrap">
				<p class="eyebrow"><span></span> CIHOPRINTSHOP / PROFIL</p>
				<div class="about-masthead-row">
					<h1>Tentang <span class="accent">CIHO.</span></h1>
					<p>Partner digital printing untuk membawa ide bisnis dan personal menjadi nyata.</p>
				</div>
			</div>
		</div>
		<div class="page-wrap about-content">
			<div class="about-photo-wrap">
				<img class="about-photo" src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin digital printing CIHOPRINTSHOP">
				<span class="photo-caption">Proses produksi CIHOPRINTSHOP</span>
			</div>
			<div class="about-copy">
				<p class="eyebrow"><span></span> 01 / Mengenal CIHO</p>
				<h2>Apa itu <span class="accent">CIHO?</span></h2>
				<p>CIHOPRINTSHOP adalah partner digital printing untuk kebutuhan bisnis dan personal. Kami membantu mengubah ide dan desain menjadi hasil cetak yang siap digunakan.</p>
				<p>Dari digital printing dan format besar hingga stiker serta kemasan, kami membantu memilih bahan, ukuran, dan hasil akhir yang sesuai dengan kebutuhan Anda.</p>
				<a class="button" href="{{ route('contact') }}">Diskusikan kebutuhan Anda <span class="button-arrow" aria-hidden="true">→</span></a>
			</div>
		</div>
		<section class="about-history" aria-labelledby="about-history-title">
			<div class="page-wrap">
				<div class="about-history-heading">
					<div>
						<p class="eyebrow"><span></span> 02 / Perjalanan</p>
						<h2 id="about-history-title">Sejarah <span>CIHO.</span></h2>
					</div>
					<p class="about-history-lead">Dari kebutuhan cetak yang beragam hingga proses yang makin praktis, perjalanan CIHO berpusat pada satu hal: membantu setiap ide siap hadir di dunia nyata.</p>
				</div>
				<div class="about-timeline">
					<article>
						<span class="about-timeline-number">01</span>
						<div><p class="about-timeline-label">Awal perjalanan</p><h3>Berangkat dari kebutuhan cetak</h3><p>CIHOPRINTSHOP hadir untuk membantu pelanggan mewujudkan desain menjadi media cetak yang bisa digunakan.</p></div>
					</article>
					<article>
						<span class="about-timeline-number">02</span>
						<div><p class="about-timeline-label">Ragam layanan</p><h3>Mengikuti kebutuhan pelanggan</h3><p>Layanan mencakup digital printing, format besar, stiker, label, dan kemasan untuk beragam keperluan.</p></div>
					</article>
					<article>
						<span class="about-timeline-number">03</span>
						<div><p class="about-timeline-label">Hari ini</p><h3>Proses yang lebih jelas</h3><p>Kami membantu membahas bahan, ukuran, dan jumlah sejak awal agar pilihan cetak terasa lebih tepat.</p></div>
					</article>
				</div>
			</div>
		</section>
		<div class="values-band">
			<div class="page-wrap values-grid">
				<article><span>01</span><h3>Teliti pada detail</h3><p>Ukuran, warna, dan finishing dipertimbangkan untuk hasil yang lebih sesuai.</p></article>
				<article><span>02</span><h3>Solusi fleksibel</h3><p>Beragam kebutuhan cetak untuk bisnis, acara, dan penggunaan personal.</p></article>
				<article><span>03</span><h3>Proses yang jelas</h3><p>Kebutuhan Anda dibicarakan sejak awal agar pilihan cetak lebih tepat.</p></article>
			</div>
		</div>
	</section>
@endsection
