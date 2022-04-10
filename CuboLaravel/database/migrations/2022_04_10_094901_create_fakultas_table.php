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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id(); // Primary Key , Auto Increment
            //Nama, kode, email, tanggal beridir, alamat
            $table->string("name", 25);
            $table->string("kode", 4);
            $table->string("email", 255);
            $table->date("tgl_bediri");
            $table->text("alamat");
            $table->timestamps(); // Mencatat tanggal buat dan tanggal update
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fakultas');
    }
};
