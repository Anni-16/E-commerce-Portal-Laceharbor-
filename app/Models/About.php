<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about_us';

    protected $fillable = [
        'banner_title',
        'banner_heading',
        'banner_subheading',
        'banner_alt_text',
        'banner_image',

        'about_title',
        'about_heading',
        'about_alt_text',
        'about_image',
        'about_subheading',
        'about_title_2',
        'about_heading_2',
        'about_description',

        'our_mission_title',
        'our_description',

        'what_we_do_title',
        'what_we_do_heading',
        'what_we_do_description',

        'our_pro_title',
        'our_pro_heading',
        'our_pro_description',
        'our_pro_tagline',

        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
