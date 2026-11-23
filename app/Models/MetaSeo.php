<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaSeo extends Model
{

    protected $table = 'meta_seo';

    protected $fillable = [
        'home_meta_title',
        'home_meta_keyword',
        'home_meta_description',
        'pro_meta_title',
        'pro_meta_keyword',
        'pro_meta_description',
        'faq_meta_title',
        'faq_meta_keyword',
        'faq_meta_description',
        'size_meta_title',
        'size_meta_keyword',
        'size_meta_description',
        'pro_cat_meta_title',
        'pro_cat_meta_keyword',
        'pro_cat_meta_description',

    ];
}
