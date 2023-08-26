<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'id'=> 1,
            'category_id'=> 1,
            'photo'=> '/image/product/PijXLaO5Vz.webp',
            'name_uz'=> '36.6 m <sup>2</sup>',
            'name_ru'=> '36.6 m <sup>2</sup>',
            'name_en'=> '36.6 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 2,
            'category_id'=> 1,
            'photo'=> '/image/product/kghcIC3cXM.webp',
            'name_uz'=> '36.6 m <sup>2</sup>',
            'name_ru'=> '36.6 m <sup>2</sup>',
            'name_en'=> '36.6 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 3,
            'category_id'=> 1,
            'photo'=> '/image/product/XG7PYyxifF.webp',
            'name_uz'=> '37.0 m <sup>2</sup>',
            'name_ru'=> '37.0 m <sup>2</sup>',
            'name_en'=> '37.0 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 4,
            'category_id'=> 2,
            'photo'=> '/image/product/n78GfyhjFu.webp',
            'name_uz'=> '42.8 m <sup>2</sup>',
            'name_ru'=> '42.8 m <sup>2</sup>',
            'name_en'=> '42.8 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 5,
            'category_id'=> 2,
            'photo'=> '/image/product/SbevwAY3bf.webp',
            'name_uz'=> '49.4 m <sup>2</sup>',
            'name_ru'=> '49.4 m <sup>2</sup>',
            'name_en'=> '49.4 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 6,
            'category_id'=> 2,
            'photo'=> '/image/product/LrCiRVaeWK.webp',
            'name_uz'=> '54.6 m <sup>2</sup>',
            'name_ru'=> '54.6 m <sup>2</sup>',
            'name_en'=> '54.6 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 7,
            'category_id'=> 3,
            'photo'=> '/image/product/XqNdpvOS8L.webp',
            'name_uz'=> '65.0 m <sup>2</sup>',
            'name_ru'=> '65.0 m <sup>2</sup>',
            'name_en'=> '65.0 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 8,
            'category_id'=> 3,
            'photo'=> '/image/product/NSkE3dHV4g.webp',
            'name_uz'=> '65.0 m <sup>2</sup>',
            'name_ru'=> '65.0 m <sup>2</sup>',
            'name_en'=> '65.0 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 9,
            'category_id'=> 3,
            'photo'=> '/image/product/djubTJzj1S.webp',
            'name_uz'=> '68.0 m <sup>2</sup>',
            'name_ru'=> '68.0 m <sup>2</sup>',
            'name_en'=> '68.0 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 10,
            'category_id'=> 3,
            'photo'=> '/image/product/ZMquPtR8ca.webp',
            'name_uz'=> '80.0 m <sup>2</sup>',
            'name_ru'=> '80.0 m <sup>2</sup>',
            'name_en'=> '80.0 m <sup>2</sup>',
        ]);
        Product::create([
            'id'=> 11,
            'category_id'=> 4,
            'photo'=> '/image/product/6wieIC699l.webp',
            'name_uz'=> '90.9 m <sup>2</sup>',
            'name_ru'=> '90.9 m <sup>2</sup>',
            'name_en'=> '90.9 m <sup>2</sup>',
        ]);
    }
}
