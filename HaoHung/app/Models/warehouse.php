<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class warehouse extends Model
{
    //
    protected $fillable = [
        'Name_Car',
        'Car_Company',
        'Price',
        'information',
        'Image',
        'Countries',
        'Quantity',
    ];

  
}
