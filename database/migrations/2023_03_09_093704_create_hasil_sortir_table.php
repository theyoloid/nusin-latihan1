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
        Schema::create('hasil_sortir', function (Blueprint $table) {
            $table->integer('id_sales')->primary();
            $table->string('nama', 50)->nullable();
            $table->string('kelas', 50)->nullable();
            $table->string('merk_barang', 50)->nullable();
            $table->bigInteger('harga_jual')->nullable();
            $table->bigInteger('total_laba')->nullable();
            $table->integer('salary')->nullable();
            $table->integer('test')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_sortir');
    }
};
