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
        Schema::table("fakultas", function(Blueprint $table)
        {
            $table->string("kodepos", 6)->after("alamat")->nullable();
            $table->string("kota", 150)->after("kodepos")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("fakultas", function(Blueprint $table)
        {
            $table->dropColumn("kodepos");
            $table->dropColumn("kota");
        });
    }
};
