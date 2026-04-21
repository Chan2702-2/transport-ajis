<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Sewa Mobil Services
        Service::create([
            'name' => 'Sewa Avanza New',
            'slug' => 'sewa-avanza-new',
            'description' => 'Nikmati kenyamanan dengan Avanza New untuk keluarga. Mobil ekonomis dengan kapasitas 7 orang yang cocok untuk perjalanan dalam kota maupun luar kota.',
            'category' => 'sewa-mobil',
            'fasilitas' => json_encode(['AC Dingin', 'Audio MP3', 'USB Charging', 'Bagasi Luas', 'Driver Profesional']),
            'harga' => 'Mulai dari Rp 275.000/hari',
            'is_active' => true,
        ]);

        Service::create([
            'name' => 'Sewa Innova Reborn',
            'slug' => 'sewa-innova-reborn',
            'description' => 'Nikmati kenyamanan maximal dengan Toyota Innova Reborn untuk keluarga Anda. Mobil ini menawarkan ruang yang luas dan nyaman untuk perjalanan jauh maupun dalam kota.',
            'category' => 'sewa-mobil',
            'fasilitas' => json_encode(['AC Tanpa Kurang', 'Audio Premium', 'USB Charging', 'Bagasi Luas', 'Driver Profesional']),
            'harga' => 'Mulai dari Rp 350.000/hari',
            'is_active' => true,
        ]);

        Service::create([
            'name' => 'Sewa Innova Zenix',
            'slug' => 'sewa-innova-zenix',
            'description' => 'Toyota Innova Zenix terbaru dengan desain lebih modern dan fitur keamanan lengkap. Cocok untuk keluarga yang menginginkan kenyamanan premium.',
            'category' => 'sewa-mobil',
            'fasilitas' => json_encode(['AC Dual Zone', 'Audio Premium', 'USB Charging', 'Bagasi Luas', 'Driver Profesional', 'Safety Features']),
            'harga' => 'Mulai dari Rp 450.000/hari',
            'is_active' => true,
        ]);

        Service::create([
            'name' => 'Sewa Hiace Commuter',
            'slug' => 'sewa-hiace-commuter',
            'description' => 'Toyota Hiace Commuter dengan kapasitas 14 orang. Cocok untuk kelompok keluarga besar, tour kantor, atau acara keluarga.',
            'category' => 'sewa-mobil',
            'fasilitas' => json_encode(['AC Double Blower', 'Audio System', 'USB Charging', 'Bagasi Besar', 'Driver Profesional']),
            'harga' => 'Mulai dari Rp 650.000/hari',
            'is_active' => true,
        ]);

        Service::create([
            'name' => 'Sewa Hiace Premio',
            'slug' => 'sewa-hiace-premio',
            'description' => 'Toyota Hiace Premio dengan interior premium dan kenyamanan setara mobil keluarga. Pilihan terbaik untuk perjalanan bisnis maupun keluarga.',
            'category' => 'sewa-mobil',
            'fasilitas' => json_encode(['AC Premium', 'Audio Premium', 'USB Charging', 'Bagasi Besar', 'Driver Profesional', 'Reclining Seat']),
            'harga' => 'Mulai dari Rp 850.000/hari',
            'is_active' => true,
        ]);

        Service::create([
            'name' => 'Sewa ELF',
            'slug' => 'sewa-elf',
            'description' => 'Mobil ELF kapasitas 15-20 orang. Cocok untuk perjalanan tour, karyawan, atau acara keluarga besar dengan budget terjangkau.',
            'category' => 'sewa-mobil',
            'fasilitas' => json_encode(['AC', 'Audio System', 'Bagasi Besar', 'Driver Profesional']),
            'harga' => 'Mulai dari Rp 500.000/hari',
            'is_active' => true,
        ]);

        Service::create([
            'name' => 'Sewa Bus Medium',
            'slug' => 'sewa-bus-medium',
            'description' => 'Bus medium kapasitas 25-30 orang. Cocok untuk tour sekolah, kantor, atau acara keluarga besar.',
            'category' => 'sewa-mobil',
            'fasilitas' => json_encode(['AC', 'Audio Video', 'Toilet', 'Driver Profesional']),
            'harga' => 'Mulai dari Rp 1.200.000/hari',
            'is_active' => true,
        ]);

        Service::create([
            'name' => 'Sewa Big Bus',
            'slug' => 'sewa-big-bus',
            'description' => 'Big bus kapasitas 45-50 orang. Cocok untuk tour besar, karyawan, atau acara komunitas.',
            'category' => 'sewa-mobil',
            'fasilitas' => json_encode(['AC', 'Audio Video', 'Toilet', 'WiFi', 'Driver Profesional']),
            'harga' => 'Mulai dari Rp 2.000.000/hari',
            'is_active' => true,
        ]);

        // Antar Jemput Bandara
        Service::create([
            'name' => 'Antar Jemput Bandara Hang Nadim',
            'slug' => 'antar-jemput-bandara',
            'description' => 'Layanan antar jemput dari/ke Bandara Hang Nadim Batam. Driver akan menunggu Anda di area kedatangan dengan papan nama. Gratis tunggu 1 jam.',
            'category' => 'antar-jemput-bandara',
            'fasilitas' => json_encode(['Papan Nama', 'Gratis Tunggu 1 Jam', 'Bantu Bawa Bagasi', 'AC Dingin', 'Driver Ramah']),
            'harga' => 'Mulai dari Rp 150.000',
            'is_active' => true,
        ]);

        // Travel Antar Kota
        Service::create([
            'name' => 'Travel Antar Kota (Batam - Jakarta)',
            'slug' => 'travel-antar-kota',
            'description' => 'Perjalanan antar kota yang nyaman dan aman. Ideal untuk keluarga yang ingin pergi ke luar kota dengan fasilitas lengkap dan driver berpengalaman.',
            'category' => 'travel-antar-kota',
            'fasilitas' => json_encode(['AC Premium', 'Reclining Seat', 'USB Charging', 'Snack & Minum', 'Istirahat di Rest Area']),
            'harga' => 'Mulai dari Rp 500.000/orang',
            'is_active' => true,
        ]);

        // Testimonials
        Testimonial::create([
            'name' => 'Bpk. Herman',
            'message' => 'Servisnya sangat memuaskan! Driver ramah dan mobilnya bersih. Anak-anak merasa nyaman sepanjang perjalanan. pasti akan pesan lagi kalau butuh travel.',
            'is_active' => true,
        ]);

        Testimonial::create([
            'name' => 'Ibu Sari',
            'message' => 'Terima kasih buat travel batam ajis. Drivernya sangat membantu membawa行李. Pokoknya recomended banget untuk keluarga!',
            'is_active' => true,
        ]);

        Testimonial::create([
            'name' => 'Bpk. Rudi',
            'message' => 'Pengalaman pertama pakai travel ini buat antar keluarga ke bandara. Sangat profesional dan tepat waktu. Good job!',
            'is_active' => true,
        ]);
    }
}
