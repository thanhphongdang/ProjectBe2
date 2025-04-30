<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'image_Product',
        'name_Car',
        'car_Company',
        'price',
        'information',
        'countries',
    ];
}