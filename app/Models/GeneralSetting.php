<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
       protected $table = 'general_setting';

    protected $fillable = [
        'brand_name',
        'website_url',
        'Website_currecry',
        'copy_rights',
        'website_logo',
        'logo_alt_tag',
        'website_favicon',
        'favicon_alt_tag',
    ];
}
