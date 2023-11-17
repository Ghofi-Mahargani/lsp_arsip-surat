<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ghofi Syafana Mahargani',
            'email' => 'ghofi@gmail.com',
            'password' => bcrypt('12345678'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730116',
            'tgl' => '2023-11-15',            
        ]);
    }
}
