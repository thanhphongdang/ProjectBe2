<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountAdmin extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'Name',
        'Email',
        'Phone',
        'Password',
        'image',
        'logo',
        'image_front',
        'image_backsite',
    ];
}
