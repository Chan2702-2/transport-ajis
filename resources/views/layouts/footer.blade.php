<footer class="bg-slate-900 text-white py-6">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div class="lg:col-span-2">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 bg-orange-500 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17h8m-8-5h8m-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a2 2 0 01-2 2h-4a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <span class="text-lg font-bold">TravelBatam<span class="text-orange-500">Ajis</span></span>
                </div>
                <p class="text-slate-400 mb-4 max-w-xs text-sm">
                    Layanan travel terpercaya untuk keluarga.
                </p>
                <a href="https://wa.me/6281234567890" target="_blank" 
                   class="inline-flex items-center gap-1 bg-green-500 hover:bg-green-600 px-3 py-1.5 rounded-full text-xs font-medium transition">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048 1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268z"/></svg>
                    Hubungi
                </a>
            </div>

            <div>
                <h4 class="font-semibold mb-3 text-sm">Menu</h4>
                <ul class="space-y-1.5">
                    <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-white transition text-xs">Beranda</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-white transition text-xs">Layanan</a></li>
                    <li><a href="{{ route('tentang') }}" class="text-slate-400 hover:text-white transition text-xs">Tentang Kami</a></li>
                    <li><a href="{{ route('testimoni') }}" class="text-slate-400 hover:text-white transition text-xs">Testimoni</a></li>
                    <li><a href="{{ route('kontak') }}" class="text-slate-400 hover:text-white transition text-xs">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-3 text-sm">Layanan</h4>
                <ul class="space-y-1.5">
                    <li><a href="{{ route('services') }}?category=sewa-mobil" class="text-slate-400 hover:text-white transition text-xs">Sewa Mobil</a></li>
                    <li><a href="{{ route('services') }}?category=antar-jemput-bandara" class="text-slate-400 hover:text-white transition text-xs">Bandara</a></li>
                    <li><a href="{{ route('services') }}?category=travel-antar-kota" class="text-slate-400 hover:text-white transition text-xs">Antar Kota</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-800 mt-4 pt-4 text-center">
            <p class="text-slate-500 text-xs">&copy; {{ date('Y') }} TravelBatamAjis</p>
        </div>
    </div>
</footer>