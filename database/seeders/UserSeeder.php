<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'password' => '123',
            'image' => 'kosong'
        ]);
        User::create([
            'name' => 'KangTit',
            'email' => 'kang@gmail.com',
            'password' => '123',
            'image' => 'kosong'
        ]);
        User::create([
            'name' => 'jago',
            'email' => 'jago@gmail.com',
            'password' => '123',
            'image' => 'kosong'
        ]);
    }
}
