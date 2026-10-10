@extends('layouts.app')

@section('title', 'Lokasi & Workshop | CIHOPRINTSHOP')
@section('description', 'Kunjungi workshop CIHOPRINTSHOP untuk konsultasi bahan cetak, pengecekan sampel, atau pengambilan pesanan secara langsung.')

@section('content')
	<section class="content-page location-page">
		<div class="page-hero page-hero-compact">
			<div class="page-wrap">
				<p class="eyebrow"><span></span> LOKASI WORKSHOP & PRODUKSI</p>
				<h1>Kunjungi Workshop<br><span class="accent">CIHOPRINTSHOP</span></h1>
				<p class="page-lead">Kunjungi workshop kami untuk berkonsultasi langsung mengenai spesifikasi file, melihat sampel material fisik, atau mengambil pesanan cetak yang telah selesai diproduksi.</p>
			</div>
		</div>

		<div class="page-wrap location-content">
			<!-- Bagian Peta / Google Maps -->
			<div class="location-map-section">
				<div class="map-card">
					<div class="map-header">
						<div class="contact-badge">
							<span class="status-indicator"></span> Peta Interaktif Lokasi
						</div>
						<h2>Panduan Peta Workshop</h2>
						<p>Gunakan peta di bawah ini untuk melihat rute perjalanan menuju workshop CIHOPRINTSHOP:</p>
					</div>

					<div class="map-frame-wrapper">
						<iframe
							class="google-map-iframe"
							src="https://maps.google.com/maps?q=CIHOPRINTSHOP+Digital+Printing&t=&z=15&ie=UTF8&iwloc=&output=embed"
							loading="lazy"
							allowfullscreen=""
							referrerpolicy="no-referrer-when-downgrade"
							title="Peta Lokasi Workshop CIHOPRINTSHOP">
						</iframe>
					</div>

					<div class="map-actions-bar">
						<div class="map-note">
							<strong>Navigasi Rute Langsung:</strong>
							<p>Akses rute tercepat menggunakan Google Maps di smartphone Anda.</p>
						</div>
						<a class="button map-direct-btn" href="https://maps.google.com/?q=CIHOPRINTSHOP+Digital+Printing" target="_blank" rel="noopener noreferrer">
							Buka di Google Maps <span class="button-arrow" aria-hidden="true">↗</span>
						</a>
					</div>
				</div>
			</div>

			<!-- Bagian Informasi Workshop & Akses -->
			<div class="location-info-section">
				<div class="contact-card">
					<div class="contact-card-header">
						<div class="contact-card-icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						</div>
						<div>
							<span class="card-kicker">ALAMAT WORKSHOP</span>
							<h3>Tempat Produksi & Kantor</h3>
						</div>
					</div>
					<div class="location-address-box">
						<h4 class="workshop-name">CIHOPRINTSHOP Digital Printing</h4>
						<p class="workshop-address">Layanan digital printing dan workshop cetak format besar. Siap melayani konsultasi dan pengambilan pesanan langsung.</p>
						<div class="location-route-guide">
							<strong>Petunjuk Akses:</strong>
							<p>Lokasi mudah dijangkau dengan kendaraan roda dua maupun roda empat. Tersedia area parkir aman untuk tamu dan pelanggan.</p>
						</div>
					</div>
				</div>

				<div class="contact-card">
					<div class="contact-card-header">
						<div class="contact-card-icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						</div>
						<div>
							<span class="card-kicker">JAM KUNJUNGAN</span>
							<h3>Operasional Workshop</h3>
						</div>
					</div>
					<div class="contact-info-grid">
						<div class="info-row">
							<span class="info-label">Senin – Sabtu</span>
							<strong class="info-value">08.00 – 20.00 WIB</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Minggu & Hari Libur</span>
							<strong class="info-value">Konfirmasi Terlebih Dahulu</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Layanan di Tempat</span>
							<strong class="info-value">Cek Sampel, Konsultasi & Pick-Up</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Hotline Admin</span>
							<strong class="info-value">0895-3333-64644</strong>
						</div>
					</div>
				</div>

				<div class="contact-card">
					<div class="contact-card-header">
						<div class="contact-card-icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
						</div>
						<div>
							<span class="card-kicker">PENGAMBILAN & PENGIRIMAN</span>
							<h3>Opsi Pengambilan Pesanan</h3>
						</div>
					</div>
					<ul class="location-features-list">
						<li>
							<strong>Ambil Langsung di Workshop</strong>
							<p>Pesanan yang telah selesai dapat langsung diambil di tempat tanpa antre.</p>
						</li>
						<li>
							<strong>Kurir Instan & Same Day</strong>
							<p>Dapat dikirim via GoSend / GrabExpress untuk area jangkauan lokal terdekat.</p>
						</li>
						<li>
							<strong>Ekspedisi Kargo Antar Kota</strong>
							<p>Pesanan partai besar dikemas dengan proteksi kardus / bubble wrap berlapis ke luar daerah.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Location Bottom Assistance Banner -->
		<div class="page-wrap">
			<div class="page-cta location-cta">
				<div>
					<p class="eyebrow"><span></span> BUTUH PANDUAN ARAH?</p>
					<h2>Ingin berkunjung atau konfirmasi jadwal?</h2>
					<p class="cta-desc">Hubungi admin WhatsApp kami terlebih dahulu agar tim kami dapat menyiapkan sampel dan menyambut kedatangan Anda.</p>
				</div>
				<a class="button" href="https://wa.me/62895333364644?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20berkunjung%20ke%20workshop." target="_blank" rel="noopener noreferrer">Hubungi WhatsApp Admin <span class="button-arrow" aria-hidden="true">↗</span></a>
			</div>
		</div>
	</section>
@endsection

