@extends('layouts.base')

@section('title', 'Layanan Travel - TravelBatamAjis')

@section('content')
<!-- Header -->
<section class="pt-20 pb-4 hero-gradient">
    <div class="container-custom">
        <span class="inline-block bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-medium mb-3">Layanan</span>
        <h1 class="text-3xl md:text-4xl font-bold text-slate-900">Layanan Kami</h1>
        <p class="text-slate-600 mt-2 max-w-xl text-sm">Pilih layanan yang sesuai dengan kebutuhan perjalanan keluarga Anda</p>
    </div>
</section>

<!-- Filter -->
<section class="pb-4 bg-white">
    <div class="container-custom">
        <div class="flex flex-wrap gap-2">
            <a href="{{ route('services') }}" 
               class="px-4 py-1.5 rounded-full text-xs font-medium transition {{ !$category ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                Semua
            </a>
            <a href="{{ route('services') }}?category=sewa-mobil" 
               class="px-4 py-1.5 rounded-full text-xs font-medium transition {{ $category == 'sewa-mobil' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                Sewa Mobil
            </a>
            <a href="{{ route('services') }}?category=antar-jemput-bandara" 
               class="px-4 py-1.5 rounded-full text-xs font-medium transition {{ $category == 'antar-jemput-bandara' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                Antar Jemput Bandara
            </a>
            <a href="{{ route('services') }}?category=travel-antar-kota" 
               class="px-4 py-1.5 rounded-full text-xs font-medium transition {{ $category == 'travel-antar-kota' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                Travel Antar Kota
            </a>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="pt-2 pb-6 bg-slate-50">
    <div class="container-custom">
        @if($services->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($services as $service)
            <a href="{{ route('services.show', $service->slug) }}" class="group card overflow-hidden">
                <div class="h-40 overflow-hidden relative">
                    @switch($service->category)
                        @case('sewa-mobil')
                            @if(str_contains($service->slug, 'avanza'))
                                <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @elseif(str_contains($service->slug, 'innova-reborn'))
                                <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @elseif(str_contains($service->slug, 'innova-zenix'))
                                <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @elseif(str_contains($service->slug, 'hiace-commuter'))
                                <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @elseif(str_contains($service->slug, 'hiace-premio'))
                                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @elseif(str_contains($service->slug, 'elf'))
                                <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @elseif(str_contains($service->slug, 'bus-medium'))
                                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @elseif(str_contains($service->slug, 'big-bus'))
                                <img src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @else
                                <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&h=250&fit=crop" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @endif
                            @break
                        @case('antar-jemput-bandara')
                            <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=400&h=250&fit=crop" 
                                 alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @break
                        @case('travel-antar-kota')
                            <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=400&h=250&fit=crop" 
                                 alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @break
                    @endswitch
                    <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-slate-800 px-2 py-1 rounded-full text-xs font-medium">
                        @switch($service->category)
                            @case('sewa-mobil') Sewa Mobil @break
                            @case('antar-jemput-bandara') Bandara @break
                            @case('travel-antar-kota') Antar Kota @break
                        @endswitch
                    </span>
                </div>
                <div class="p-4">
                    <h3 class="text-base font-bold text-slate-900 mb-1 group-hover:text-orange-500 transition">{{ $service->name }}</h3>
                    <p class="text-slate-600 text-xs mb-3 line-clamp-2">{{ $service->description }}</p>
                    @if($service->harga)
                    <p class="text-orange-500 font-bold text-sm">{{ $service->harga }}</p>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="text-center py-16">
            <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <p class="text-slate-500">Layanan tidak ditemukan</p>
        </div>
        @endif
    </div>
</section>
@endsection