<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'Image',
        'Name_Car',
        'Car_Company',
        'Price',
        'Information',
        'Countries',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'ID_Car', 'ID_Car');
    }
}
