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
        Schema::create('tbl_accdeposithd', function (Blueprint $table) {
            $table->string('notransaksi', 50)->primary();
            $table->string('kodekantor', 50)->nullable()->index('kodekantor_depo');
            $table->string('kodeacc', 30)->nullable()->index('kodeacc_depo');
            $table->string('kodeaccto', 30)->nullable()->index('kodeaccto_depo');
            $table->timestamp('tanggal', 6)->nullable();
            $table->string('matauang', 50)->nullable()->index('matauang1_depo');
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->string('tipe', 30)->nullable();
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->text('keterangan')->nullable();
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd', 6)->nullable();
            $table->string('shiftkerja', 20)->nullable();
            $table->string('kodesupel', 50)->nullable()->index('kodesupel_depo');
            $table->string('tipetrs', 30)->nullable();
            $table->boolean('bc_trf_sts')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_accdeposithd');
    }
};
