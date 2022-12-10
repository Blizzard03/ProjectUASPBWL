<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id('ID_Laptop');
            $table->string('Image_Product',120)->nullable();
            $table->string('Merk',60);
            $table->string('Model',60);
            $table->string('CPU',60);
            $table->string('RAM',60);
            $table->string('GPU',60);
            $table->string('SSD',60);
            $table->double('Harga',12,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptops');
    }
};
