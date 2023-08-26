<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'id'=> 1,
            'name_uz'=> '1 xona',
            'name_ru'=> '1 комнатная',
            'name_en'=> '1 комнатная',
        ]);
        Category::create([
            'id'=> 2,
            'name_uz'=> '2 xona',
            'name_ru'=> '2 комнатная',
            'name_en'=> '2 комнатная',
        ]);
        Category::create([
            'id'=> 3,
            'name_uz'=> '3 xona',
            'name_ru'=> '3 комнатная',
            'name_en'=> '3 комнатная',
        ]);
        Category::create([
            'id'=> 4,
            'name_uz'=> '4 xona',
            'name_ru'=> '4 комнатная',
            'name_en'=> '4 комнатная',
        ]);
        Category::create([
            'id'=> 5,
            'name_uz'=> '5 xona',
            'name_ru'=> '5 комнатная',
            'name_en'=> '5 комнатная',
        ]);
    }
}
