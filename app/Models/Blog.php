<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'heading',
        'content',
        'image',
        'published_at',
        'author',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
   
}
