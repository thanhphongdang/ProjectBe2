<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Translation\Dumper\JsonFileDumper;

class Product extends Model
{
    //
    protected $fillable = [
        'ID_Car',
        'Image',
        'Name_Car',
        'Car_Company',
        'Price',
        'Information',
        'Countries',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'ID_Car');
    }
}
