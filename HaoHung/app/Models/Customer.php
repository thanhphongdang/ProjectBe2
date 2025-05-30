<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $primaryKey = 'ID_Customer';
    public $incrementing = true;
    protected $keyType = 'int';

}
