@extends('layouts.base')

@section('title', 'Tentang Kami - TravelBatamAjis')

@section('content')
<!-- Main Content - Full Width Image with Overlay -->
<div class="relative">
    <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?w=1200&h=600&fit=crop" 
         alt="Keluarga Travel" class="w-full h-72 md:h-80 object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
    <div class="absolute top-0 left-0 right-0 p-6">
        <div class="container-custom">
            <div class="max-w-xl pt-12 md:pt-16">
                <span class="inline-block bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-medium mb-2">Tentang Kami</span>
                <h1 class="text-3xl md:text-4xl font-bold text-white">Perjalanan Nyaman<br>untuk Keluarga</h1>
                <p class="text-white/80 mt-1 text-sm">TravelBatamAjis - partner perjalanan keluarga Anda</p>
            </div>
        </div>
    </div>
</div>

<!-- Content Below -->
<section class="pt-6 pb-6 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
            <!-- Left: Text Content -->
            <div>
                <h2 class="text-lg md:text-xl font-bold text-slate-900 mb-3">Fokus pada Kenyamanan Keluarga</h2>
                <div class="space-y-2 text-slate-600 text-sm">
                    <p>
                        <strong>TravelBatamAjis</strong> adalah penyedia layanan travel yang fokus pada kenyamanan dan keamanan keluarga. Setiap keluarga berhak mendapatkan pengalaman perjalanan terbaik.
                    </p>
                    <p>
                        Dengan armada terawat dan driver berpengalaman, kami siap mengantar keluarga Anda dengan tenang dan nyaman.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-3 mt-5">
                    <div class="bg-slate-50 p-3 rounded-xl text-center">
                        <p class="text-2xl font-bold text-slate-900">5+</p>
                        <p class="text-xs text-slate-600">Tahun Pengalaman</p>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-xl text-center">
                        <p class="text-2xl font-bold text-slate-900">500+</p>
                        <p class="text-xs text-slate-600">Pelanggan Puas</p>
                    </div>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="relative">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-orange-200/30 rounded-full blur-3xl"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600&h=400&fit=crop" 
                         alt="Armada Travel" class="w-full h-56 object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi -->
<section class="pt-4 pb-6 bg-slate-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="card p-5">
                <div class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Visi</h3>
                <p class="text-slate-600 text-sm">Menjadi pilihan utama travel keluarga yang aman, nyaman, dan terpercaya.</p>
            </div>

            <div class="card p-5">
                <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Misi</h3>
                <ul class="text-slate-600 text-sm space-y-1">
                    <li>• Layanan travel yang aman</li>
                    <li>• Armada terawat</li>
                    <li>• Driver profesional</li>
                    <li>• Kepuasan pelanggan</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="pt-2 pb-6 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            <div class="text-center p-4">
                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                    <span class="text-2xl">🛡️</span>
                </div>
                <h3 class="font-bold text-slate-900 text-sm mb-1">Keamanan</h3>
                <p class="text-slate-600 text-xs">Prioritas utama keluarga</p>
            </div>

            <div class="text-center p-4">
                <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                    <span class="text-2xl">💺</span>
                </div>
                <h3 class="font-bold text-slate-900 text-sm mb-1">Kenyamanan</h3>
                <p class="text-slate-600 text-xs">Perjalanan tanpa khawatir</p>
            </div>

            <div class="text-center p-4">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                    <span class="text-2xl">🤝</span>
                </div>
                <h3 class="font-bold text-slate-900 text-sm mb-1">Kepercayaan</h3>
                <p class="text-slate-600 text-xs">Layanan transparan</p>
            </div>
        </div>
    </div>
</section>
@endsection