<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Translation\Dumper\JsonFileDumper;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    //
     use HasFactory;
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
    protected $primaryKey = 'Id_Products'; // <-- thêm dòng này
    public $incrementing = true;
    protected $keyType = 'int';


    private function normalizeCountry($value)
    {
        $ascii = Str::ascii($value); // Bỏ dấu tiếng Việt
        return strtolower(trim($ascii));
    }

    public function getTax()
    {
        if ($this->normalizeCountry($this->Countries) === 'viet nam') {
            return $this->Price * 0.05;
        } else {
            return $this->Price * 0.15;
        }
    }


    public function getPriceWithTax()
    {
        return $this->Price + $this->getTax();
    }
}
