<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#11100f">
	<meta name="description" content="@yield('description', 'CIHOPRINTSHOP melayani kebutuhan digital printing dengan hasil berkualitas untuk bisnis dan personal.')">
	<title>@yield('title', 'CIHO Digital Printing')</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..800&family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/ciho.css') }}?v=39">
</head>
<body>
	<svg class="visual-effects" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
		<filter id="remove-white-background" color-interpolation-filters="sRGB">
			<feColorMatrix type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  -1 -1 -1 3 0"/>
		</filter>
	</svg>
	<header class="site-header">
		<div class="header-inner">
			<a class="brand" href="{{ route('home') }}" aria-label="CIHOPRINTSHOP, beranda">
				<img class="brand-logo" src="{{ asset('images/ciho-logo.webp') }}" alt="CIHOPRINTSHOP Digital Printing">
			</a>
			<nav class="main-nav" id="main-nav" aria-label="Navigasi utama">
				<a href="{{ route('home') }}" @class(['is-active' => request()->routeIs('home')])>Beranda</a>
				<a href="{{ route('about') }}" @class(['is-active' => request()->routeIs('about')])>Tentang</a>
				<a href="{{ route('materials') }}" @class(['is-active' => request()->routeIs('materials')])>Bahan</a>
				<a href="{{ route('machines') }}" @class(['is-active' => request()->routeIs('machines')])>Mesin Kami</a>
				<a href="{{ route('project') }}" @class(['is-active' => request()->routeIs('project')])>Project</a>
				<a href="{{ route('location') }}" @class(['is-active' => request()->routeIs('location')])>Lokasi</a>
			</nav>
			<a class="button header-cta" href="{{ route('contact') }}">Hubungi Kami <span class="button-arrow" aria-hidden="true">→</span></a>
			<button class="menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="main-nav">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M3 5h14M3 10h14M3 15h14" stroke="currentColor" stroke-width="1.7" stroke-linecap="square"/></svg>
			</button>
		</div>
	</header>

	<main>
		@yield('content')
	</main>

	<footer class="site-footer">
		<div class="footer-inner">
			<a class="brand footer-brand" href="{{ route('home') }}" aria-label="CIHOPRINTSHOP, beranda">
				<img class="brand-logo" src="{{ asset('images/ciho-logo.webp') }}" alt="CIHOPRINTSHOP Digital Printing">
			</a>
			<p>Ide kamu, kami cetak jadi nyata.</p>
			<span>© {{ date('Y') }} CIHOPRINTSHOP</span>
		</div>
	</footer>
	<a class="whatsapp-float" href="https://wa.me/62895333364644?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kebutuhan%20cetak." target="_blank" rel="noopener noreferrer" aria-label="Hubungi CIHOPRINTSHOP melalui WhatsApp" title="Chat via WhatsApp">
		<svg viewBox="0 0 32 32" aria-hidden="true" focusable="false"><path d="M16 3.5a12.5 12.5 0 0 0-10.7 19L4 28l5.7-1.5A12.5 12.5 0 1 0 16 3.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path d="M11.1 9.5c-.3-.6-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.2s1.3 3.7 1.5 4c.2.3 2.7 4.2 6.5 5.8.9.4 1.6.6 2.1.7.9.2 1.7.2 2.3.1.7-.1 2-.8 2.3-1.7.3-.8.3-1.6.2-1.7-.1-.2-.4-.3-.8-.5l-2.4-1.1c-.3-.1-.6-.2-.8.2-.3.4-.8 1.1-1.1 1.3-.2.3-.4.3-.8.1-.4-.2-1.6-.6-3.1-1.8-1.1-1-1.8-2.2-2-2.5-.2-.4 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.5-.6.1-.2.1-.4 0-.6l-.9-2.1Z" fill="currentColor"/></svg>
	</a>

	<script src="{{ asset('js/ciho.js') }}?v=9" defer></script>
</body>
</html>
