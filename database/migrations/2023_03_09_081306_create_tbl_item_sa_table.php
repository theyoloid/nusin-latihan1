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
        Schema::create('tbl_item_sa', function (Blueprint $table) {
            $table->string('iddetailtrs', 150)->primary();
            $table->string('notransaksi', 100)->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('kodeitem', 100)->nullable()->index('kodeitem6');
            $table->timestamp('tanggal')->nullable();
            $table->timestamp('tgl_trs')->nullable();
            $table->integer('nobaris')->nullable()->default(0);
            $table->string('kodekantor', 50)->nullable()->index('kodekantor6');
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->string('satuan', 50)->nullable()->index('satuan1');
            $table->decimal('harga', 35, 20)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkonversi', 20, 3)->nullable()->default(0);
            $table->decimal('hppdasar', 35, 20)->nullable()->default(0);
            $table->decimal('jmlretur', 35, 20)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_item_sa');
    }
};
