<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeGuide extends Model
{
       protected $table = 'size_guide';

    protected $fillable = [
        'name',
        'images_alt_tag',
        'images',
        'status',
    ];

}
