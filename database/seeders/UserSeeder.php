<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Baby Shark',
            'username' => 'babyshark',
            'email' => 'babyshark@unida.ac.id',
            'password' => Hash::make('sharksecret'),
        ]);
    }
}
