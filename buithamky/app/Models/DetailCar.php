<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DetailCar extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'ID_Car',
        'Engine_Type',
        'Speed',
        'Car_consumption',
        'create_add',
        'update_add',
    ];
}
