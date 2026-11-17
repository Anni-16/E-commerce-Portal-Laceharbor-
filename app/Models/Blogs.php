<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'blog_title',
        'blog_url',
        'blog_date',
        'blog_alt_tag',
        'blog_image',
        'blog_description',
        'blog_status',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
