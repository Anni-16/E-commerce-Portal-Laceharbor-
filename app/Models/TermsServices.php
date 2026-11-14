<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermsServices extends Model
{
   protected $table = 'terms_services';

    protected $fillable = [
        'terms_title',
        'terms_date',
        'terms_description',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
