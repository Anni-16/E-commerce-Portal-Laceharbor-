<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GtmTag extends Model
{
   
    protected $table = 'gtm_tag';

    protected $fillable = [
        'head_tag',
        'body_tag',
    ];
}
