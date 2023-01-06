<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super',
            'email' => 'super@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('super#123'),
            'remember_token' => Str::random(10)
        ])->assignRole('super', 'admin', 'user');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin#123'),
            'remember_token' => Str::random(10)
        ])->assignRole('admin', 'user');

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user#123'),
            'remember_token' => Str::random(10)
        ])->assignRole('user');
    }
}
