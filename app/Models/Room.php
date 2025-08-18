<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
        'capacity',
        'amenities',
        
    ];
    protected $casts = [
        'amenities' => 'array',
    ];

}
