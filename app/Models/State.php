<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state';

    protected $fillable = [
        'country_id',
        'state_name',
        'status',
    ];

    public function country()
    {
        return $this->belongsTo(
            Country::class,
            'country_id'
        );
    }
}
