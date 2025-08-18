<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'author',
        'content',
        'rating',
        'approved',
        'show_on_index',
    ];
}
