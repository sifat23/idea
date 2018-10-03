<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    //
    protected $fillable = [
        'name',
        'quantity',
        'price',
        'product_id'
    ];


}
