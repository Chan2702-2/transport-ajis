<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Travel Bogor Ajis - Layanan travel aman & nyaman untuk keluarga. Sewa mobil, antar jemput bandara, travel antar kota. Hubungi kami di WhatsApp!">
    <title>@yield('title', 'Travel Bogor Ajis - Perjalanan Nyaman untuk Keluarga')</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if(Session::has('hide_layout'))
    <style>
        nav.navbar { display: none !important; }
        footer { display: none !important; }
        .whatsapp-float { display: none !important; }
    </style>
    @endif
</head>
<body class="font-sans antialiased">
    <div x-data="{ mobileMenuOpen: false }" class="min-h-screen flex flex-col">
        @if(!Session::has('hide_layout'))
        @include('layouts.navbar')
        @endif
        
        <main class="{{ Session::has('hide_layout') ? 'flex-1' : 'flex-grow' }}">
            @yield('content')
        </main>
        
        @if(!Session::has('hide_layout'))
        @include('layouts.footer')
        @include('components.whatsapp-float')
        @endif
    </div>
</body>
</html>