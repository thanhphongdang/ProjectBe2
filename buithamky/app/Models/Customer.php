<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;


class Customer extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'image',
        'Name',
        'Phone',
        'Email',
        'Address',
        'Ngay_Mua',
    ];

}
