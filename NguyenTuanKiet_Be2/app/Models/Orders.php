<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    
    /** @use HasFactory<\Database\Factories\UserFactory> */
   

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'Name_Car',
        'ID_Customer',
        'ID_Product',
        'ID_Sale',
        'Resport',
        'Oder_date',
        'Money_Sum',
    ];
}
