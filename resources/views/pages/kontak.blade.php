@extends('layouts.base')

@section('title', 'Kontak Kami - TravelBatamAjis')

@section('content')
<!-- Full Screen Contact - No Navbar -->
<div class="min-h-screen bg-white flex flex-col">
    <!-- Close Button -->
    <div class="absolute top-4 right-4 z-10">
        <a href="{{ route('home') }}" class="w-10 h-10 bg-slate-100 hover:bg-slate-200 rounded-full flex items-center justify-center">
            <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </a>
    </div>

    <!-- Contact Content - Full Screen -->
    <div class="flex-1 flex flex-col justify-center px-6 py-8">
        <div class="container-custom max-w-2xl mx-auto">
            <div class="text-center mb-6">
                <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-2">Hubungi Kami</h1>
                <p class="text-slate-600 text-sm">Via WhatsApp untuk respons cepat!</p>
            </div>

            <!-- Contact Cards -->
            <div class="space-y-3">
                <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center gap-4 p-4 bg-green-500 rounded-2xl hover:bg-green-600 transition">
                    <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048 1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-white text-lg">WhatsApp</p>
                        <p class="text-white/80 text-sm">+62 812-3456-7890</p>
                    </div>
                    <svg class="w-5 h-5 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>

                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl">
                    <div class="w-14 h-14 bg-slate-200 rounded-xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-slate-900 text-lg">Alamat</p>
                        <p class="text-slate-600 text-sm">Batam, Kepulauan Riau</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl">
                    <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-5 11V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l5.26-3.63a2 2 0 012.22 0L17 16z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-slate-900 text-lg">Email</p>
                        <p class="text-slate-600 text-sm">info@travelbatamajis.com</p>
                    </div>
                </div>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-slate-500 hover:text-slate-700 text-sm">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Floating WhatsApp - Hide on this page -->
<style>
    .fixed.whatsapp-float { display: none !important; }
</style>
@endsection