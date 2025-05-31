<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evalute extends Model
{
    //
     protected $table = 'evalutes';
     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'ID_Product',
        'ID_Customer',
        'Evalute_Date',
        'Star',
        'comment'
    ];
   
}
