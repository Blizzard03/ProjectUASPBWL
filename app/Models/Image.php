<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'customers_tabel';
    protected $fillale = [
        'User_ID',
        'File_Path'
    ];

    public function Customer(){
        return $this->belongsTo('App\Costumer','User_ID');
    }
}
