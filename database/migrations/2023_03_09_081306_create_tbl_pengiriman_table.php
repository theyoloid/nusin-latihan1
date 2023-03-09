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
        Schema::create('tbl_pengiriman', function (Blueprint $table) {
            $table->string('notrs', 50)->primary();
            $table->string('idalamat_kirim', 150)->nullable();
            $table->string('idongkir_kurir', 150)->nullable();
            $table->decimal('berat', 20, 0)->nullable();
            $table->decimal('paket', 20, 0)->nullable();
            $table->string('statuskirim', 50)->nullable();
            $table->timestamp('tanggalkirim', 6)->nullable();
            $table->string('noresi', 150)->nullable();
            $table->string('kurir', 150)->nullable();
            $table->string('jasa', 50)->nullable();
            $table->string('layanan', 50)->nullable();
            $table->decimal('total', 20, 0)->nullable();
            $table->boolean('opsioffline')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pengiriman');
    }
};
