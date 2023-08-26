<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Gallery::create([
            'id'=> 1,
            'photo'=> '/image/gallery/dotqZUEjum.webp',
        ]);
        Gallery::create([
            'id'=> 2,
            'photo'=> '/image/gallery/AsgiOtbqIt.webp',
        ]);
        Gallery::create([
            'id'=> 3,
            'photo'=> '/image/gallery/qP1BsmduvD.webp',
        ]);
        Gallery::create([
            'id'=> 4,
            'photo'=> '/image/gallery/80mH5c0NgL.webp',
        ]);
        Gallery::create([
            'id'=> 5,
            'photo'=> '/image/gallery/xT6ZO1pfpb.webp',
        ]);
        Gallery::create([
            'id'=> 6,
            'photo'=> '/image/gallery/lE9sVhaP6X.webp',
        ]);
        Gallery::create([
            'id'=> 7,
            'photo'=> '/image/gallery/6Wvk0tDrcr.webp',
        ]);
        Gallery::create([
            'id'=> 8,
            'photo'=> '/image/gallery/ORAJ9X4p3k.webp',
        ]);
        Gallery::create([
            'id'=> 9,
            'photo'=> '/image/gallery/Lkq3SSrYhf.webp',
        ]);
        Gallery::create([
            'id'=> 10,
            'photo'=> '/image/gallery/ykDH9sZgzO.webp',
        ]);
        Gallery::create([
            'id'=> 11,
            'photo'=> '/image/gallery/1f4hcyxYnM.webp',
        ]);
        Gallery::create([
            'id'=> 12,
            'photo'=> '/image/gallery/Dgx2nB1kdy.webp',
        ]);
        Gallery::create([
            'id'=> 13,
            'photo'=> '/image/gallery/KBVPUOVBAc.webp',
        ]);
        Gallery::create([
            'id'=> 14,
            'photo'=> '/image/gallery/siCKLm9Rou.webp',
        ]);
    }
}
