<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTeg extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'discription',
    ];
}
