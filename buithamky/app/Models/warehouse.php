<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class warehouse extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'Name_Car',
        'Car_Company',
        'Price',
        'information',
        'Image',
        'Countries',
        'Quantity',
    ];
   
}
