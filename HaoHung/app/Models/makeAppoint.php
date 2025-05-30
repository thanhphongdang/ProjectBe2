<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class makeAppoint extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'Name_Car',
        'Name_User',
        'Phone',
        'Address',
        'Email',
        'Dealer',
    ];
    protected $table = 'make_appoints';

}