<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

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
      
      protected $dates = ['deleted_at'];

}
