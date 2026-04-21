@extends('layouts.base')

@section('title', 'Testimoni - TravelBatamAjis')

@section('content')
<!-- Header -->
<section class="pt-20 pb-4 hero-gradient">
    <div class="container-custom">
        <span class="inline-block bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-medium mb-3">Testimoni</span>
        <h1 class="text-3xl md:text-4xl font-bold text-slate-900">Apa Kata Pelanggan?</h1>
        <p class="text-slate-600 mt-2 max-w-xl text-sm">Kepuasan pelanggan adalah kebanggaan kami</p>
    </div>
</section>

<!-- Testimonials -->
<section class="pt-2 pb-6 bg-slate-50">
    <div class="container-custom">
        @if($testimonials->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($testimonials as $testimonial)
            <div class="card p-4">
                <div class="flex items-center gap-1 mb-3">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-slate-600 text-sm mb-4">"{{ $testimonial->message }}"</p>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-slate-900 rounded-full flex items-center justify-center text-white font-semibold text-xs">
                        {{ substr($testimonial->name, 0, 1) }}
                    </div>
                    <p class="font-semibold text-slate-900 text-sm">{{ $testimonial->name }}</p>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-8">
            <p class="text-slate-500 text-sm">Belum ada testimoni</p>
        </div>
        @endif
    </div>
</section>

<!-- CTA -->
<section class="pt-4 pb-6 bg-white">
    <div class="container-custom text-center">
        <h2 class="text-lg font-bold text-slate-900 mb-2">Puas dengan layanan kami?</h2>
        <p class="text-slate-600 text-sm mb-4">Bagikan pengalaman Anda juga!</p>
        <a href="https://wa.me/6281234567890?text=Halo, saya ingin memberikan testimoni" 
           target="_blank"
           class="btn-primary inline-flex items-center gap-2 text-sm py-2 px-4">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048-1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268z"/></svg>
            Kirim Testimoni
        </a>
    </div>
</section>
@endsection