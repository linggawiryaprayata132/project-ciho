@extends('layouts.app')

@section('title', 'Hubungi Kami | Konsultasi & Pemesanan')
@section('description', 'Hubungi tim profesional CIHOPRINTSHOP untuk konsultasi spesifikasi bahan, penawaran harga, dan layanan digital printing.')

@section('content')
	<section class="content-page contact-page">
		<div class="page-hero page-hero-compact">
			<div class="page-wrap">
				<p class="eyebrow"><span></span> KONSULTASI & PEMESANAN</p>
				<h1>Layanan Percetakan Digital<br><span class="accent">Profesional & Terpercaya</span></h1>
				<p class="page-lead">Diskusikan spesifikasi material, volume cetak, dan penawaran harga terbaik untuk kebutuhan bisnis, acara, maupun personal Anda bersama tim CIHOPRINTSHOP.</p>
			</div>
		</div>

		<div class="page-wrap contact-content">
			<div class="contact-copy">
				<div class="contact-badge">
					<span class="status-indicator"></span> Respon Cepat di Jam Operasional
				</div>
				<h2>Konsultasi Spesifikasi & Estimasi Biaya</h2>
				<p>Sampaikan detail pesanan Anda, mulai dari jenis produk, dimensi ukuran, kuantitas cetak, hingga tenggat waktu pengerjaan. Tim teknis kami siap memberikan solusi material paling efisien dan hasil cetak beresolusi tinggi.</p>

				<div class="contact-features">
					<div class="contact-feature-item">
						<div class="feature-icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
						</div>
						<div>
							<strong>Penawaran & Spesifikasi Transparan</strong>
							<p>Rincian estimasi biaya dihitung jelas berdasarkan material, kuantitas, dan kebutuhan finishing.</p>
						</div>
					</div>

					<div class="contact-feature-item">
						<div class="feature-icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						</div>
						<div>
							<strong>Material Berkualitas & Kalibrasi Presisi</strong>
							<p>Didukung mesin cetak format lebar berteknologi modern untuk ketajaman warna dan detail optimal.</p>
						</div>
					</div>

					<div class="contact-feature-item">
						<div class="feature-icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
						</div>
						<div>
							<strong>Pengiriman Aman & Tepat Waktu</strong>
							<p>Melayani pengiriman pesanan partai besar maupun satuan ke berbagai tujuan dengan standar kemasan aman.</p>
						</div>
					</div>
				</div>

				<div class="contact-action-box">
					<a class="button contact-main-btn" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kebutuhan%20cetak." target="_blank" rel="noopener noreferrer">
						<svg class="whatsapp-btn-icon" viewBox="0 0 24 24" fill="currentColor" width="20" height="20" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.34C9.36 7.34 9.09 7.4 8.87 7.65C8.65 7.89 8.02 8.48 8.02 9.7C8.02 10.92 8.91 12.1 9.03 12.26C9.15 12.43 10.77 14.93 13.26 16C13.85 16.26 14.31 16.42 14.67 16.53C15.27 16.72 15.81 16.69 16.24 16.63C16.72 16.56 17.72 16.03 17.93 15.44C18.14 14.85 18.14 14.34 18.08 14.24C18.01 14.13 17.84 14.07 17.57 13.93L16.03 13.18C15.76 13.04 15.59 12.98 15.42 13.23C15.25 13.48 14.74 14.07 14.59 14.24C14.44 14.41 14.29 14.43 14.02 14.3C13.75 14.16 12.88 13.88 11.85 12.96C11.05 12.25 10.51 11.37 10.35 11.1C10.2 10.83 10.34 10.68 10.47 10.55C10.6 10.42 10.75 10.22 10.89 10.06C11.03 9.9 11.07 9.78 11.16 9.61C11.25 9.44 11.21 9.3 11.14 9.16C11.07 9.03 10.53 7.7 10.3 7.15C10.08 6.62 9.86 6.7 9.7 6.69L9.53 7.34Z"/></svg>
						Hubungi WhatsApp Admin <span class="button-arrow" aria-hidden="true">↗</span>
					</a>
					<p class="contact-note">Terhubung langsung ke WhatsApp Admin (0813-9000-1217).</p>
				</div>
			</div>

			<div class="contact-cards">
				<div class="contact-card">
					<div class="contact-card-header">
						<div class="contact-card-icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						</div>
						<div>
							<span class="card-kicker">INFORMASI OPERASIONAL</span>
							<h3>Jam Kerja & Layanan</h3>
						</div>
					</div>
					<div class="contact-info-grid">
						<div class="info-row">
							<span class="info-label">WhatsApp Admin</span>
							<strong class="info-value">0813-9000-1217</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Hari Operasional</span>
							<strong class="info-value">Senin – Minggu</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Jam Layanan</span>
							<strong class="info-value">08.00 – 23.59 WIB</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Kapasitas Order</span>
							<strong class="info-value">Satuan, Retail & Partai Besar</strong>
						</div>
					</div>
				</div>

				<div class="contact-card">
					<div class="contact-card-header">
						<div class="contact-card-icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
						</div>
						<div>
							<span class="card-kicker">PROSEDUR ORDER</span>
							<h3>Alur Kerja Pemesanan</h3>
						</div>
					</div>
					<ol class="contact-steps">
						<li>
							<span class="step-num" aria-hidden="true">01</span>
							<div>
								<strong>Konsultasi & Pengiriman File</strong>
								<p>Sampaikan spesifikasi atau kirim file desain siap cetak (PDF, AI, TIFF, CDR).</p>
							</div>
						</li>
						<li>
							<span class="step-num" aria-hidden="true">02</span>
							<div>
								<strong>Konfirmasi Spesifikasi & Biaya</strong>
								<p>Pengecekan kesiapan file, persetujuan bahan, dan konfirmasi penawaran harga resmi.</p>
							</div>
						</li>
						<li>
							<span class="step-num" aria-hidden="true">03</span>
							<div>
								<strong>Produksi Presisi & Pengiriman</strong>
								<p>Pesanan dicetak dengan standar kontrol kualitas dan dikirim tepat waktu ke lokasi Anda.</p>
							</div>
						</li>
					</ol>
					<div class="contact-card-footer">
						<a href="{{ route('project') }}" class="text-arrow">Lihat portofolio & contoh produk <span aria-hidden="true">→</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
