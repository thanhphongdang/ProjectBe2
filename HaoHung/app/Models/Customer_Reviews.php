<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_Reviews extends Model
{
    //
    protected $fillable = [
        'Avatar',
        'Customer_Name',
        'Evaluate',
        'Description',
        'image_Product',
    ];

}
