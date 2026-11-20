<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQCategory extends Model
{
    protected $table = 'faq_categories';

    protected $fillable = [
        'faq_cat_name',
        'status',
    ];

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
