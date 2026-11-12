<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnsExchanges extends Model
{
    protected $table = 'returns_exchanges';

   protected $fillable = [
        'returns_title',
        'returns_date',
        'returns_description',
        
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
