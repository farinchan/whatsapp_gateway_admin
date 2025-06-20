<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\PackageUser;
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




        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
