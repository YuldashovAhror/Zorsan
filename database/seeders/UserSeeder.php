<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id'=> 1,
            'name'=> 'admin',
            'email'=> 'zorsan2023@gmail.com',
            'password'=> Hash::make("2023zorsan"),
        ]);
    }
}
