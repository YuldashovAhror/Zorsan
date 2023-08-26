<?php

namespace Database\Seeders;

use App\Models\Presentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    public function run()
    {
        Presentation::create([
            'id'=> 1,
            'photo'=> '/image/presentation/Afac4Gp7pl.pdf',
        ]);
    }
}
