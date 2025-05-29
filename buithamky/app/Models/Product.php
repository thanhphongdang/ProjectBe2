<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Product extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'ID_Car',
        'Name_Car',
        'Car_Company',
        'Price',
        'Information',
        'Image',
        'Countries',
    ];
   
}
