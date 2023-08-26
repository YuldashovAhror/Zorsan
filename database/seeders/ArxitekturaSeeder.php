<?php

namespace Database\Seeders;

use App\Models\Arxitektura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArxitekturaSeeder extends Seeder
{
    public function run()
    {
        Arxitektura::create([
            'id'=> 1,
            'photo'=> '/image/arxitektura/qjzvQksXxd.webp',
        ]);
    }
}
