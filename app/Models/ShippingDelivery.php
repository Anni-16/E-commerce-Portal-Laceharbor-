<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingDelivery extends Model
{
   protected $table = 'shipping_delivery';

   protected $fillable = [
        'shipping_title',
        'shipping_date',
        'shipping_description',
        
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
