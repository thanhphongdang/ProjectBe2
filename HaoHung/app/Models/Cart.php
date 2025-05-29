<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'ID_Customer',
        'ID_Product',
        'Name_Car',
        'Quantity',
        'Sum'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'ID_Product', 'Id_Products');
    }
}
