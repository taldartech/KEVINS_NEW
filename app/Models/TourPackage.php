<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'image_url',
        'itinerary',
    ];
    protected $casts = [
        'itinerary' => 'array',
    ];

   
}
