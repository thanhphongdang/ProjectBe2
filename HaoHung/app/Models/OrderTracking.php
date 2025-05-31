<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Oder;

class OrderTracking extends Model
{
    protected $fillable = ['order_id', 'status', 'description', 'time'];

    protected $casts = [
        'time' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Oder::class);
    }
}