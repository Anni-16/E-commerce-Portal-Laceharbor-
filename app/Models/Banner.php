<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';

    protected $fillable = [
        'banner_title',
        'banner_link',
        'banner_image',
        'banner_alt_text',
        'status',
    ];
}
