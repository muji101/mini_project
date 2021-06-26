<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        User::create([
            'name' => 'Pepet',
            'email' => 'pet@gmail.com',
            'password' => Hash::make('12345'),
            'image' => 'kosong'
        ]);
        User::create([
            'name' => 'KangTit',
            'email' => 'kang@gmail.com',
            'password' => Hash::make('12345'),
            'image' => 'kosong'
        ]);
        User::create([
            'name' => 'jago',
            'email' => 'jago@gmail.com',
            'password' => Hash::make('12345'),
            'image' => 'kosong'
        ]);
    }
}
