<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reset_code_passwords extends Model
{
    //
    //
    protected $table = 'reset_code_passwords';
    // public $timestamps = false;

    protected $fillable = [
        'email',
        'code',
        'created_at',
        
    ];
}
