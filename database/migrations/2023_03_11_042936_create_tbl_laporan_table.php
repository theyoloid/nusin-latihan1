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
        Schema::create('tbl_laporan', function (Blueprint $table) {
            $table->string('nama_sales', 50)->primary();
            $table->string('nama_merk', 50)->nullable();
            $table->bigInteger('jumlah_penjualan')->nullable();
            $table->bigInteger('laba')->nullable();
            $table->date('tanggal_penjualan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_laporan');
    }
};
