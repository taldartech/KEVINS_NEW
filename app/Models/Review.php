<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'author',
        'content',
        'rating',
        'approved',
        'show_on_index',
    ];
      // Optional: define deleted_at as date
      protected $dates = ['deleted_at'];
}
