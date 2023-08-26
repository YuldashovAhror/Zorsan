<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    public function run()
    {
        Block::create([
            'id'=> 1,
            'photo'=> '/image/block/nfwsJqmLxb.webp',
            'photo2'=> '/image/block/mYT3Z3F8ca.webp',
        ]);
    }
}
