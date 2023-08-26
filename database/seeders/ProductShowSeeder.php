<?php

namespace Database\Seeders;

use App\Models\ProductShow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductShowSeeder extends Seeder
{
    public function run()
    {
        ProductShow::create([
            'id'=> 1,
            'photo'=> '/image/productshow/5eZi7WpwW4.webp',
            'name_uz'=> 'favvoralar',
            'name_ru'=> 'ФОНТАНЫ',
            'name_en'=> 'ФОНТАНЫ',
        ]);
        ProductShow::create([
            'id'=> 2,
            'photo'=> '/image/productshow/6Fk5SX43JV.webp',
            'name_uz'=> 'Kuzatuv kameralari',
            'name_ru'=> 'КАМЕРЫ НАБЛЮДЕНИЯ',
            'name_en'=> 'КАМЕРЫ НАБЛЮДЕНИЯ',
        ]);
        ProductShow::create([
            'id'=> 3,
            'photo'=> '/image/productshow/FnY2o3UA6P.webp',
            'name_uz'=> 'SPORT maydonchasi',
            'name_ru'=> 'СПОРТИВНАЯ ПЛОЩАДКА',
            'name_en'=> 'СПОРТИВНАЯ ПЛОЩАДКА',
        ]);
        ProductShow::create([
            'id'=> 4,
            'photo'=> '/image/productshow/9tUxELQsO3.webp',
            'name_uz'=> 'o\'yin maydonchasi',
            'name_ru'=> 'ДЕТСКАЯ ПЛОЩАДКА',
            'name_en'=> 'ДЕТСКАЯ ПЛОЩАДКА',
        ]);
        ProductShow::create([
            'id'=> 5,
            'photo'=> '/image/productshow/WjL1Hpo1Uf.webp',
            'name_uz'=> 'Eko zonalar',
            'name_ru'=> 'ЭКО-ЗОНЫ',
            'name_en'=> 'ЭКО-ЗОНЫ',
        ]);
        ProductShow::create([
            'id'=> 6,
            'photo'=> '/image/productshow/FFNaAXbQV8.webp',
            'name_uz'=> 'avtoturargoh',
            'name_ru'=> 'ПАРКИНГ',
            'name_en'=> 'ПАРКИНГ',
        ]);
        ProductShow::create([
            'id'=> 7,
            'photo'=> '/image/productshow/YA2wIvsJiF.webp',
            'name_uz'=> 'Masjid',
            'name_ru'=> 'МЕЧЕТЬ',
            'name_en'=> 'МЕЧЕТЬ',
        ]);
    }
}
