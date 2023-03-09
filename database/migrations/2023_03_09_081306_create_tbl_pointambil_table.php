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
        Schema::create('tbl_pointambil', function (Blueprint $table) {
            $table->string('notransaksi', 50)->primary();
            $table->string('tipe', 50)->nullable();
            $table->timestamp('tanggal', 6)->nullable();
            $table->timestamp('periodetgl1', 6)->nullable();
            $table->timestamp('periodetgl2', 6)->nullable();
            $table->decimal('jmlambil', 20, 0)->nullable()->default(0);
            $table->string('kodesupel', 50)->nullable();
            $table->text('keterangan')->nullable();
            $table->string('kodekantor', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pointambil');
    }
};
