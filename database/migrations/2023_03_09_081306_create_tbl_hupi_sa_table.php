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
        Schema::create('tbl_hupi_sa', function (Blueprint $table) {
            $table->string('kodesupel', 50)->nullable();
            $table->timestamp('tanggal')->nullable();
            $table->string('kode_acc', 30)->nullable();
            $table->string('kodemu', 50)->nullable();
            $table->decimal('jumlah', 20, 3)->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('tipetrs', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_hupi_sa');
    }
};
