<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Instruktur Arham',
            'email' => 'instruktur1@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'instructor',
        ]);

        User::create([
            'name' => 'Instruktur Anna',
            'email' => 'instruktur2@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'instructor',
        ]);

        User::create([
            'name' => 'Arhamullah Kamaruddin',
            'email' => 'siswa1@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'student',
        ]);

        User::create([
            'name' => 'Hasnawati',
            'email' => 'siswa2@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'student',
        ]);
    }
}
