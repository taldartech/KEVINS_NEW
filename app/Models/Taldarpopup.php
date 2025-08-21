<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taldarpopup extends Model
{
    protected $fillable = [
        'title',
        'content',
        'link',
        'is_active',
        
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
