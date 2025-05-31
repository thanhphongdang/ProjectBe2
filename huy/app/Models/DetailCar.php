<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailCar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'Image',
        'Name_Car',
        'Car_Company',
        'Price',
        'Information',
        'Countries',
    ];

    public function detail()
   {
     return $this->hasOne(DetailCar::class, 'product_id');
   }
}
