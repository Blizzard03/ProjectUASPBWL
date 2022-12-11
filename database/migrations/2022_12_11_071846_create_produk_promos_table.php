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
        Schema::create('produk_promos', function (Blueprint $table) {
            $table->id();
            $table->integer('produk_id')->unsigned();
            $table->decimal('harga_awal', 16,2)->default(0);
            $table->decimal('harga_akhir', 16,2)->default(0);
            $table->integer('diskon_persen')->default(0);
            $table->decimal('diskon_nominal', 16,2)->default(0);
            $table->integer('User_ID')->unsigned();
            $table->foreignid('User_ID');
            $table->foreignid('Laptop_ID');
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
        Schema::dropIfExists('produk_promos');
    }
};
