<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'synopsis',
        'genre',
        'image_url',
        'url',
        'ratings',
        'rating_count',
        'duration',
        'year',
    ];
}
