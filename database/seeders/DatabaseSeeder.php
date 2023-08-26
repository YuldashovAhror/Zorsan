<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ArxitekturaSeeder::class,
            BlockSeeder::class,
            CategorySeeder::class,
            GallerySeeder::class,
            MetategSeeder::class,
            PresentationSeeder::class,
            ProductSeeder::class,
            ProductShowSeeder::class,
            SecondSliderSeeder::class,
            WordsSeeder::class,
        ]);
    }
}
