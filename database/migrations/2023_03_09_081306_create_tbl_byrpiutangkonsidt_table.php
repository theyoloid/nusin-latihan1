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
        Schema::create('tbl_byrpiutangkonsidt', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('notransaksi', 50)->nullable()->index('notransaksi2_tko');
            $table->string('notrsmasuk', 50)->nullable()->index('notrsmasuk1_tko');
            $table->string('tipe', 5)->nullable();
            $table->string('matauang', 50)->nullable()->index('matauang4_tko');
            $table->decimal('ratetrs', 35, 20)->nullable()->default(0);
            $table->decimal('jmlkredit', 20, 3)->nullable()->default(0);
            $table->decimal('krd_jml_pot', 20, 3)->nullable()->default(0);
            $table->decimal('krd_total', 20, 3)->nullable()->default(0);
            $table->decimal('krd_jml_byr', 20, 3)->nullable()->default(0);
            $table->timestamp('dateupd', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_byrpiutangkonsidt');
    }
};