<div class="fixed bottom-6 right-6 z-50" x-data="{ show: false }" x-init="setTimeout(() => show = true, 1500)">
    <a href="https://wa.me/6281234567890?text=Halo, saya ingin bertanya tentang layanan travel" 
       target="_blank"
       x-show="show"
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="opacity-0 scale-90"
       x-transition:enter-end="opacity-100 scale-100"
       class="bg-green-500 hover:bg-green-600 text-white px-5 py-3 rounded-full shadow-xl hover:shadow-2xl flex items-center gap-3 font-medium transition-all hover:scale-105">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.167 3.711c-2.684-2.686-7.078-2.925-10.25-.737L3.917 8.93c-.636.518-1.154 1.168-1.588 1.927l-2.5 4.286c-.315.54-.048 1.223.535 1.396l3.375.975c.318.092.639.138.961.138.977 0 1.905-.379 2.593-1.068l2.5-2.5c.688-.688 1.605-1.068 2.593-1.068.196 0 .39.016.582.047l3.417-3.417c.958-1.335.926-3.555-.293-5.268zm-6.59 7.048l-3.417 3.417c-.957 1.335-.926 3.555.293 5.268 2.684 2.686 7.078 2.925 10.25.737l6-5.964c.636-.518 1.154-1.168 1.588-1.927l2.5-4.286c.315-.54.048-1.223-.535-1.396l-3.375-.975c-.318-.092-.639-.138-.961-.138-.977 0-1.905.379-2.593 1.068l-2.5 2.5c-.688.688-1.605 1.068-2.593 1.068-.196 0-.39-.016-.582-.047z"/>
        </svg>
        <span class="hidden sm:inline">Chat WhatsApp</span>
    </a>
</div>