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
        Schema::create('tbl_alamatkirim', function (Blueprint $table) {
            $table->string('id', 150)->primary();
            $table->string('kode_supel', 50)->nullable();
            $table->string('kontak', 150)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('telepon', 200)->nullable();
            $table->string('kotatujuan', 100)->nullable();
            $table->string('kodekantor', 50)->nullable();
            $table->string('subwilasal', 100)->nullable();
            $table->string('subwiltujuan', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_alamatkirim');
    }
};
