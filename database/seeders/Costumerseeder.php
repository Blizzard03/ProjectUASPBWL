<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Costumer;
class Costumerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Input Db
        $input['Nama_User']= 'Muhamad Ariq Rasyid';
        $input['Email_User']='mariq.rasyid@gmail.com';
        $input['Password'] = 'Blizzard03';
        $input['Nomor_Telepon']='+6283879527973';
        $input['Alamat']='Jl. Suryalaya I no 1';
        $input['Role']='Admin';

        Costumer::create($input);
    }
}
