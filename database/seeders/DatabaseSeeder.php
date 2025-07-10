<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\PackageUser;
use App\Models\SettingWebsite;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'user']);

        User::create([
            'name' => 'Fajri Rinaldi Chan',
            'email' => 'fajri@gariskode.com',
            'password' => bcrypt('password'),
        ])->assignRole('super-admin');

        User::create([
            'name' => 'User Test',
            'email' => 'test@torkatatech.com',
            'password' => bcrypt('password'),
        ])->assignRole('user');

        Package::create([
            'name' => 'Trial 30 Hari',
            'slug' => 'trial-30-hari',
            'description' => 'Paket percobaan selama 30 hari',
            'price' => 0,
            'is_active' => true,
        ]);

        PackageUser::create([
            'user_id' => 1,
            'package_id' => 1,
            'start_at' => now(),
            'end_at' => now()->addDays(30),
            'is_active' => true,
            'status' => 'active',
        ]);

        PackageUser::create([
            'user_id' => 2,
            'package_id' => 1,
            'start_at' => now(),
            'end_at' => now()->addDays(30),
            'is_active' => true,
            'status' => 'active',
        ]);

        SettingWebsite::create([
            'name' => 'Torkata Whatsapp Gateway',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'email' => 'twapi@torkatatech.com',
            'phone' => '+628xxxxxxxxxx',
            'address' => 'Jl. Sawahan V No.1, Sawahan, Kec. Padang Tim., Kota Padang, Sumatera Barat.',
            'latitude' => '-0.32177371869479526',
            'longitude' => '100.39795359131934',
            'about' => '<p><strong>Torkata Whatsapp Gateway</strong> adalah platform yang menyediakan layanan pengiriman pesan melalui WhatsApp dengan mudah dan efisien. Dengan Torkata, Anda dapat mengirim pesan massal, notifikasi, dan berkomunikasi dengan pelanggan Anda secara langsung melalui aplikasi WhatsApp.</p>
                <p>Platform ini dirancang untuk membantu bisnis dan individu dalam mengelola komunikasi mereka dengan lebih baik. Torkata menawarkan berbagai fitur seperti pengiriman pesan terjadwal, integrasi dengan sistem CRM, dan analisis performa pesan yang dikirim.</p>
                <p>Dengan antarmuka yang user-friendly, Torkata memungkinkan pengguna untuk mengirim pesan dengan cepat dan mudah tanpa memerlukan keterampilan teknis yang mendalam. Anda dapat mengelola daftar kontak, membuat template pesan, dan melacak status pengiriman pesan Anda dengan mudah.</p>
                <p>Torkata Whatsapp Gateway juga mendukung pengiriman pesan dalam berbagai format, termasuk teks, gambar, video, dan dokumen. Dengan demikian, Anda dapat berkomunikasi dengan pelanggan Anda dengan cara yang lebih menarik dan interaktif.</p>',
        ]);




        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
