<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name_uz',
        'name_ru',
        'name_en',
        'photo',
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
