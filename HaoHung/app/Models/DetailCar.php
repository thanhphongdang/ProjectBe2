<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailCar extends Model
{
    //
    protected $fillable = [
        'ID_Car',
        'Engine_Type',
        'Speed',
        'Car_consumption',
    ];

    
}


