<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Image_Product extends Model
{
    protected $fillable=[
        'ID_Laptop',
        'File_Path',
    ];

    public function Laptop(){
        return $this->belongsTo('App\Laptop','ID_Laptop');
    }
}
