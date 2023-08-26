<?php

namespace Database\Seeders;

use App\Models\MetaTeg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetategSeeder extends Seeder
{
    public function run()
    {
        MetaTeg::create([
            'id'=> 1,
            'name'=> 'Zo\'rsan',
            'photo'=> '/image/metateg/Rh8qMqYpKb.webp',
            'discription'=> 'Zo\'rsan',
        ]);
    }
}
