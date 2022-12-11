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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('User_ID');
            $table->string('Foto_Profil',100)->nullable();
            $table->string('Nama_User',60);
            $table->string('Email_User',60)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Password',32);
            $table->string('Nomor_Telepon',25);
            $table->text('Alamat')->nullable();
            $table->string('Role',12)->default('User');
            $table->rememberToken();
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
        Schema::dropIfExists('customers');
    }
};
