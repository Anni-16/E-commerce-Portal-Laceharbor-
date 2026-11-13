<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_us';

    protected $fillable = [
        'contact_title',
        'contact_description',
        'address',
        'email',
        'phone',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}