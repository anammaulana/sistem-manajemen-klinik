<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role' => 'admin', // kamu bisa ubah role sesuai kebutuhan
            'username' => 'admin',
            'password' => Hash::make('password123'), // kamu bisa ubah password sesuai kebutuhan
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}