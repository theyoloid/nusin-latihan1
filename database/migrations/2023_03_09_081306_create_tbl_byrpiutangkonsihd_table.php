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
        Schema::create('tbl_byrpiutangkonsihd', function (Blueprint $table) {
            $table->string('notransaksi', 50)->primary();
            $table->string('kodekantor', 50)->nullable()->index('kodekantor2_tko');
            $table->timestamp('tanggal', 6)->nullable();
            $table->string('tipe', 5)->nullable();
            $table->string('kodesupel', 50)->nullable()->index('kodesupplier1_tko');
            $table->string('matauang', 50)->nullable()->index('matauang5_tko');
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->decimal('totalbayar', 20, 3)->nullable()->default(0);
            $table->decimal('totalpotongan', 20, 3)->nullable();
            $table->string('acc_bayar', 30)->nullable();
            $table->string('acc_pot', 30)->nullable();
            $table->string('carabayar', 5)->nullable()->default('TN');
            $table->timestamp('byr_krd_jt', 6)->nullable();
            $table->string('nomor', 50)->nullable();
            $table->text('keterangan')->nullable();
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd', 6)->nullable();
            $table->string('shiftkerja', 20)->nullable();
            $table->boolean('stslunas')->nullable()->default(false);
            $table->timestamp('tgllunas_cbg')->nullable();
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
        Schema::dropIfExists('tbl_byrpiutangkonsihd');
    }
};
