<nav class="fixed top-0 left-0 right-0 z-50 glass border-b border-slate-100" x-data="{ mobileMenuOpen: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)">
    <div class="container-custom">
        <div class="flex items-center justify-between h-14 md:h-16">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <div class="w-10 h-10 bg-slate-900 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17h8m-8-5h8m-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a2 2 0 01-2 2h-4a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold text-slate-900">TravelBatam<span class="text-orange-500">Ajis</span></span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition {{ request()->routeIs('home') ? 'text-slate-900' : '' }}">Beranda</a>
                <a href="{{ route('services') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition {{ request()->routeIs('services') || request()->routeIs('services.show') ? 'text-slate-900' : '' }}">Layanan</a>
                <a href="{{ route('tentang') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition {{ request()->routeIs('tentang') ? 'text-slate-900' : '' }}">Tentang</a>
                <a href="{{ route('testimoni') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition {{ request()->routeIs('testimoni') ? 'text-slate-900' : '' }}">Testimoni</a>
                <a href="{{ route('kontak') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition {{ request()->routeIs('kontak') ? 'text-slate-900' : '' }}">Kontak</a>
            </div>

            <div class="hidden md:block">
                <a href="https://wa.me/6281234567890?text=Halo, saya ingin bertanya tentang layanan travel" 
                   target="_blank"
                   class="btn-primary flex items-center gap-2 text-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048 1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268z"/></svg>
                    Hubungi Kami
                </a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-slate-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t bg-white/95 backdrop-blur-sm">
        <div class="container-custom py-4 space-y-3">
            <a href="{{ route('home') }}" class="block py-2 text-slate-700 font-medium {{ request()->routeIs('home') ? 'text-orange-500' : '' }}">Beranda</a>
            <a href="{{ route('services') }}" class="block py-2 text-slate-700 font-medium {{ request()->routeIs('services') ? 'text-orange-500' : '' }}">Layanan</a>
            <a href="{{ route('tentang') }}" class="block py-2 text-slate-700 font-medium {{ request()->routeIs('tentang') ? 'text-orange-500' : '' }}">Tentang</a>
            <a href="{{ route('testimoni') }}" class="block py-2 text-slate-700 font-medium {{ request()->routeIs('testimoni') ? 'text-orange-500' : '' }}">Testimoni</a>
            <a href="{{ route('kontak') }}" class="block py-2 text-slate-700 font-medium {{ request()->routeIs('kontak') ? 'text-orange-500' : '' }}">Kontak</a>
            <a href="https://wa.me/6281234567890" target="_blank" class="block w-full bg-green-500 text-white text-center py-3 rounded-full font-medium mt-4">
                WhatsApp
            </a>
        </div>
    </div>
</nav>