<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    protected $fillable = [
        'name',
        'region',
        'district',
        'type',
        'address',
        'google_map_embed'
    ];
}
