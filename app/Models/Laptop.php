<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    //Table Laptop
    protected $table = 'laptops';

    //PK Table Laptop
    protected $primary_key = 'ID_Laptop';

    //Data Input
    protected $fillable = [
        'Image_Product',
        'Merk',
        'Model',
        'CPU',
        'RAM',
        'GPU',
        'SSD',
        'Harga'
    ];

    public function Image(){
        return $this->hasMany('App\Product_Image', 'ID_Laptop');
    }
}
