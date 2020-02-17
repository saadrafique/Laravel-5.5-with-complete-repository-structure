<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //

    protected $fillable = [
        'store', 
        'title', 
        'title_suffix',
        'coupon_code',
        'aff_url',
        'start_date',
        'end_date',
        'photo'
    ];
}
