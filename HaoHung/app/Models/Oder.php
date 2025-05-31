<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    protected $table = 'orders';

    protected $fillable = ['user_id', 'status'];

    public function trackings()
    {
        return $this->hasMany(OrderTracking::class, 'order_id');
    }
}