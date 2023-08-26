<?php

namespace Database\Seeders;

use App\Models\SecondSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SecondSliderSeeder extends Seeder
{
    public function run()
    {
        SecondSlider::create([
            'id'=> 1,
            'photo'=> '/image/secondslider/nKuojDSvPk.webp',
            'photo2'=> '/image/secondslider/R1Ww3WYnb5.webp',
        ]);
    }
}
