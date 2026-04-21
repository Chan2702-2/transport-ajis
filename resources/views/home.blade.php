@extends('layouts.base')

@section('title', 'TravelBatamAjis - Perjalanan Nyaman untuk Keluarga')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center hero-gradient">
    <div class="container-custom w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center py-16">
            <div class="animate-fade-in-up">
                <span class="inline-flex items-center gap-2 bg-orange-100 text-orange-600 px-4 py-1.5 rounded-full text-sm font-medium mb-5">
                    <span class="w-2 h-2 bg-orange-500 rounded-full animate-pulse"></span>
                    Layanan Travel Keluarga
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight mb-5">
                    Perjalanan Nyaman<br>
                    <span class="gradient-text">untuk Keluarga</span>
                </h1>
                <p class="text-lg text-slate-600 mb-6 max-w-lg leading-relaxed">
                    Nikmati perjalanan yang aman dan nyaman bersama keluarga. Driver profesional & armada terawat siap mengantar Anda ke tempat tujuan.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="https://wa.me/6281234567890?text=Halo, saya ingin memesan layanan travel" 
                       target="_blank"
                       class="btn-primary flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048 1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268z"/></svg>
                        Pesan Sekarang
                    </a>
                    <a href="{{ route('services') }}" class="btn-secondary flex items-center justify-center gap-2">
                        Lihat Layanan
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <div class="flex items-center gap-8 pt-6 border-t border-slate-200">
                    <div>
                        <p class="text-3xl font-bold text-slate-900">500+</p>
                        <p class="text-sm text-slate-500">Pelanggan Puas</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-slate-900">5+</p>
                        <p class="text-sm text-slate-500">Tahun Pengalaman</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-slate-900">100%</p>
                        <p class="text-sm text-slate-500">Aman & Nyaman</p>
                    </div>
                </div>
            </div>

            <div class="relative hidden lg:block animate-fade-in-up animate-delay-200">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-orange-200/30 rounded-full blur-3xl"></div>
                <div class="relative bg-white rounded-3xl p-4 shadow-2xl border border-slate-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=700&h=450&fit=crop" 
                         alt="Armada Travel" 
                         class="w-full h-64 object-cover rounded-2xl mb-4">
                    <div class="grid grid-cols-3 gap-3">
                        <div class="text-center p-3 bg-slate-50 rounded-xl">
                            <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=60&h=60&fit=crop&crop=face" 
                                 class="w-10 h-10 rounded-full mx-auto mb-1 object-cover">
                            <p class="text-xs text-slate-600 font-medium">Aman</p>
                        </div>
                        <div class="text-center p-3 bg-slate-50 rounded-xl">
                            <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=60&h=60&fit=crop&crop=face" 
                                 class="w-10 h-10 rounded-full mx-auto mb-1 object-cover">
                            <p class="text-xs text-slate-600 font-medium">Bersih</p>
                        </div>
                        <div class="text-center p-3 bg-slate-50 rounded-xl">
                            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=60&h=60&fit=crop&crop=face" 
                                 class="w-10 h-10 rounded-full mx-auto mb-1 object-cover">
                            <p class="text-xs text-slate-600 font-medium">Tepat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <span class="inline-block bg-slate-100 text-slate-600 px-4 py-1.5 rounded-full text-sm font-medium mb-4">Layanan Kami</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Layanan Travel Keluarga</h2>
            <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Pilih layanan yang sesuai dengan kebutuhan perjalanan keluarga Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="{{ route('services') }}?category=sewa-mobil" class="group card overflow-hidden">
                <div class="h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&h=250&fit=crop" 
                         alt="Sewa Mobil" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Sewa Mobil</h3>
                    <p class="text-slate-600 text-sm mb-3">Nikmati kebebasan dengan menyewa mobil sesuai kebutuhan. Armada terawat siap antar keluarga Anda.</p>
                    <span class="text-orange-500 font-medium text-sm flex items-center gap-2 group-hover:gap-3 transition">
                        Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </div>
            </a>

            <a href="{{ route('services') }}?category=antar-jemput-bandara" class="group card overflow-hidden">
                <div class="h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=400&h=250&fit=crop" 
                         alt="Bandara" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Antar Jemput Bandara</h3>
                    <p class="text-slate-600 text-sm mb-3">Layanan antar jemput dari/ke bandara. Driver siap menunggu di area kedatangan dengan layanan terbaik.</p>
                    <span class="text-green-500 font-medium text-sm flex items-center gap-2 group-hover:gap-3 transition">
                        Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </div>
            </a>

            <a href="{{ route('services') }}?category=travel-antar-kota" class="group card overflow-hidden">
                <div class="h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=400&h=250&fit=crop" 
                         alt="Travel Antar Kota" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Travel Antar Kota</h3>
                    <p class="text-slate-600 text-sm mb-3">Perjalanan antar kota yang nyaman dan aman. Driver berpengalaman mengantar dengan nyaman.</p>
                    <span class="text-orange-500 font-medium text-sm flex items-center gap-2 group-hover:gap-3 transition">
                        Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </div>
            </a>
        </div>

        <!-- Armada Section -->
        <div class="mt-12">
            <div class="text-center mb-8">
                <span class="inline-block bg-slate-100 text-slate-600 px-4 py-1.5 rounded-full text-sm font-medium mb-4">Armada Kami</span>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900">Jenis Mobil yang Tersedia</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="card overflow-hidden">
                    <div class="h-36 bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=300&h=200&fit=crop" 
                             alt="Avanza New" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 text-center">
                        <p class="text-sm font-bold text-slate-900">Avanza New</p>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="h-36 bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=300&h=200&fit=crop" 
                             alt="Innova Reborn" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 text-center">
                        <p class="text-sm font-bold text-slate-900">Innova Reborn</p>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="h-36 bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=300&h=200&fit=crop" 
                             alt="Innova Zenix" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 text-center">
                        <p class="text-sm font-bold text-slate-900">Innova Zenix</p>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="h-36 bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=300&h=200&fit=crop" 
                             alt="Hiace Commuter" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 text-center">
                        <p class="text-sm font-bold text-slate-900">Hiace Commuter</p>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="h-36 bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=300&h=200&fit=crop" 
                             alt="Hiace Premio" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 text-center">
                        <p class="text-sm font-bold text-slate-900">Hiace Premio</p>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="h-36 bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=300&h=200&fit=crop" 
                             alt="ELF" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 text-center">
                        <p class="text-sm font-bold text-slate-900">ELF</p>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="h-36 bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=300&h=200&fit=crop" 
                             alt="Bus Medium" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 text-center">
                        <p class="text-sm font-bold text-slate-900">Bus Medium</p>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="h-36 bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?w=300&h=200&fit=crop" 
                             alt="Big Bus" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3 text-center">
                        <p class="text-sm font-bold text-slate-900">Big Bus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section-padding bg-slate-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block bg-orange-100 text-orange-600 px-4 py-1.5 rounded-full text-sm font-medium mb-4">Keunggulan</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Mengapa Memilih Kami?</h2>
                <p class="text-slate-600 mb-8">Kami mengutamakan kenyamanan dan keamanan keluarga Anda dalam setiap perjalanan dengan layanan profesional.</p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Aman untuk Keluarga</h4>
                            <p class="text-sm text-slate-600">Driver profesional dengan Surat Izin Mengemudi valid</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Armada Terawat</h4>
                            <p class="text-sm text-slate-600">Mobil selalu bersih dan dalam kondisi prima</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">Tepat Waktu</h4>
                            <p class="text-sm text-slate-600">Servis sesuai jadwal dengan ketepatan waktu</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-orange-200/30 rounded-full blur-3xl"></div>
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?w=600&h=500&fit=crop" 
                         alt="Keluarga" class="w-full h-80 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                        <h3 class="text-xl font-bold text-white mb-1">Keluarga adalah Prioritas Kami</h3>
                        <p class="text-white/80 text-sm">Setiap perjalanan adalah pengalaman yang berarti</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
@if($testimonials->count() > 0)
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <span class="inline-block bg-slate-100 text-slate-600 px-4 py-1.5 rounded-full text-sm font-medium mb-4">Testimoni</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Apa Kata Pelanggan?</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($testimonials as $testimonial)
            <div class="card p-6">
                <div class="flex items-center gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-slate-600 mb-6">"{{ $testimonial->message }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-slate-900 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                        {{ substr($testimonial->name, 0, 1) }}
                    </div>
                    <p class="font-semibold text-slate-900">{{ $testimonial->name }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('testimoni') }}" class="btn-secondary inline-flex items-center gap-2">
                Lihat Semua Testimoni
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="section-padding bg-slate-900">
    <div class="container-custom text-center">
        <h2 class="text-lg md:text-xl font-bold text-white mb-2">Siap untuk Perjalanan Keluarga?</h2>
        <p class="text-slate-400 mb-4 text-sm">Hubungi kami sekarang untuk memesan layanan travel. Tim kami siap membantu 24/7!</p>
        <a href="https://wa.me/6281234567890?text=Halo, saya ingin memesan layanan travel" 
           target="_blank"
           class="btn-primary inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-sm py-2 px-4">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048 1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268z"/></svg>
            Hubungi via WhatsApp
        </a>
    </div>
</section>
@endsection