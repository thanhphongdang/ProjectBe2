<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function region() {
        return $this->belongsTo(Region::class);
    }
    public function agencies() {
        return $this->hasMany(MinMap::class);
    }
}