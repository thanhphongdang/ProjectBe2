<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;

class Product extends Model
{
  
    protected $fillable = [
        'ID_Car',
        'Name_Car',
        'Car_Company',
        'Price',
        'Information',
        'Image',
        'Countries',
        'Start',

    ];
}
