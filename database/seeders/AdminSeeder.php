<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role; // Tambahkan ini untuk menggunakan role

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Membuat pengguna admin
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), // Ubah sesuai kebutuhan
            'role' =>'admin' // Ubah sesuai kebutuhan
        ]);



        // Debug untuk memastikan apakah role berhasil ditugaskan
        
    }
}
