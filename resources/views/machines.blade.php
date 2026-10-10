@extends('layouts.app')

@section('title', 'Mesin Kami')
@section('description', 'Kenali mesin digital printing format lebar yang digunakan CIHOPRINTSHOP.')

@section('content')
	<section class="content-page">
		<div class="page-hero page-hero-compact">
			<div class="page-wrap">
				<p class="eyebrow"><span></span> Peralatan produksi CIHO</p>
				<h1>Mesin yang membantu<br><span class="accent">ide jadi nyata.</span></h1>
				<p class="page-lead">Kenali peralatan cetak yang digunakan dalam proses produksi CIHOPRINTSHOP.</p>
			</div>
		</div>
		<div class="page-wrap machine-content">
			<article class="machine-feature">
				<img class="machine-photo" src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin digital printing format lebar di tempat produksi CIHOPRINTSHOP">
				<div class="machine-info">
					<span class="machine-type">Digital printing</span>
					<h2>Printer format lebar</h2>
					<p>Unit ini digunakan untuk proses cetak media berukuran besar. Foto memperlihatkan mesin produksi CIHO yang dapat membantu pengerjaan materi visual sesuai kebutuhan pesanan.</p>
					<div class="machine-note"><span aria-hidden="true">i</span><span>Informasi merek, model, dan spesifikasi teknis belum dicantumkan agar detail mesin tetap akurat.</span></div>
					<a class="button machine-cta" href="{{ route('contact') }}">Tanyakan kebutuhan cetak <span class="button-arrow" aria-hidden="true">→</span></a>
				</div>
			</article>
		</div>
	</section>
@endsection
