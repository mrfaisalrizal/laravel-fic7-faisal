<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();

        User::create([
            'name'  => 'Ahmad Faisal Rizal',
            'email' => 'faisalrizal@gmail.com',
            'email_verified_at' => now(),
            'role'  => 'developer',
            'phone' => '081230345114',
            'bio' => 'Developer',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '081230345115',
            'bio'   => 'Super Admin',
            'password' => Hash::make('password'),
        ]);
    }
}
