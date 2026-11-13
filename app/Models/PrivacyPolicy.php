<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    protected $table = 'privacy_policy';

    protected $fillable = [
        'privacy_title',
        'privacy_date',
        'privacy_description',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
