<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - TravelBatamAjis</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        nav, footer, .whatsapp-float { display: none !important; }
    </style>
</head>
<body class="font-sans antialiased bg-white">
    <div class="min-h-screen flex flex-col">
        <!-- Close Button -->
        <div class="absolute top-4 right-4 z-10">
            <a href="{{ route('home') }}" class="w-10 h-10 bg-slate-100 hover:bg-slate-200 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
        </div>

        <!-- Contact Content - Full Screen with Map Side by Side -->
        <div class="flex-1 flex items-center justify-center px-4 py-6">
            <div class="container-custom max-w-4xl mx-auto">
                <div class="text-center mb-5">
                    <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-1">Hubungi Kami</h1>
                    <p class="text-slate-600 text-sm">Via WhatsApp untuk respons cepat!</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Left: Contact Info -->
                    <div class="space-y-2">
                        <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center gap-3 p-4 bg-green-500 rounded-xl hover:bg-green-600 transition">
                            <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048 1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-white">WhatsApp</p>
                                <p class="text-white/80 text-sm">+62 812-3456-7890</p>
                            </div>
                        </a>

                        <div class="flex items-center gap-3 p-4 bg-slate-50 rounded-xl">
                            <div class="w-12 h-12 bg-slate-200 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Alamat</p>
                                <p class="text-slate-600 text-sm">Batam, Kepulauan Riau</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-slate-50 rounded-xl">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-5 11V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l5.26-3.63a2 2 0 012.22 0L17 16z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">Email</p>
                                <p class="text-slate-600 text-sm">info@travelbatamajis.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Map -->
                    <div class="bg-slate-100 rounded-xl overflow-hidden h-64 md:h-auto min-h-[200px] relative">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4068813!2d104.015!3d0.951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid"
                            width="100%" 
                            height="100%" 
                            style="border:0;position:absolute;top:0;left:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <a href="https://www.google.com/maps/search/Batam+Kepulauan+Riau" 
                           target="_blank"
                           class="absolute inset-0 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition"
                           style="z-index:1;">
                            <div class="text-center">
                                <svg class="w-8 h-8 text-slate-400 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                                <p class="text-xs text-slate-500">Buka di Google Maps</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>