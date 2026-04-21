@extends('layouts.base')

@section('title', $service->name . ' - TravelBatamAjis')

@section('content')
<!-- Header -->
<section class="pt-24 pb-6 hero-gradient">
    <div class="container-custom">
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-4">
            <a href="{{ route('home') }}" class="hover:text-slate-900">Beranda</a>
            <span>/</span>
            <a href="{{ route('services') }}" class="hover:text-slate-900">Layanan</a>
            <span>/</span>
            <span class="text-slate-900">{{ $service->name }}</span>
        </nav>
        <h1 class="text-3xl md:text-4xl font-bold text-slate-900">{{ $service->name }}</h1>
    </div>
</section>

<!-- Detail -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <div class="h-56 md:h-64 rounded-2xl overflow-hidden mb-6">
                    @switch($service->category)
                        @case('sewa-mobil')
                            <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=800&h=400&fit=crop" 
                                 alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @break
                        @case('antar-jemput-bandara')
                            <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800&h=400&fit=crop" 
                                 alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @break
                        @case('travel-antar-kota')
                            <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800&h=400&fit=crop" 
                                 alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @break
                    @endswitch
                </div>

                <div class="mb-8">
                    <h2 class="text-xl font-bold text-slate-900 mb-4">Deskripsi</h2>
                    <p class="text-slate-600 leading-relaxed">{{ $service->description }}</p>
                </div>

                @if($service->fasilitas)
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-slate-900 mb-4">Fasilitas</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach(json_decode($service->fasilitas) as $fasilitas)
                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-lg">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700 text-sm">{{ $fasilitas }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div>
                <div class="sticky top-28 card p-6">
                    @if($service->harga)
                    <div class="mb-6">
                        <p class="text-sm text-slate-500">Harga</p>
                        <p class="text-3xl font-bold text-orange-500">{{ $service->harga }}</p>
                    </div>
                    @endif

                    <a href="https://wa.me/6281234567890?text=Halo, saya ingin pesan layanan:{{ $service->name }}%0ANama:%0ATanggal:%0AJumlah Penumpang:%0ALayanan: {{ $service->name }}%0ARute:" 
                       target="_blank"
                       class="w-full bg-green-500 hover:bg-green-600 text-white text-center py-4 rounded-full font-semibold transition flex items-center justify-center gap-2 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048 1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268z"/></svg>
                        Pesan via WhatsApp
                    </a>

                    <div class="border-t pt-4 mt-4">
                        <p class="text-sm text-slate-500 mb-2">Format Pemesanan:</p>
                        <div class="bg-slate-50 p-4 rounded-lg text-sm text-slate-600 space-y-1">
                            <p>Nama: ...</p>
                            <p>Tanggal: ...</p>
                            <p>Jumlah Penumpang: ...</p>
                            <p>Layanan: {{ $service->name }}</p>
                            <p>Rute: ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection