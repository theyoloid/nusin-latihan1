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
        Schema::create('tbl_item_ik', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('iddetailim', 150)->index('tbl_item_ik_iddetailim');
            $table->string('iddetailtrs', 150)->nullable()->index('tbl_item_ik_iddetailtrs');
            $table->enum('notransaksi', [''])->nullable()->index('tbl_item_ik_notrs');
            $table->string('kodekantor', 50)->nullable();
            $table->timestamp('tanggal')->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('kodeitem', 100)->nullable();
            $table->decimal('jumlahdasar', 20, 3)->nullable()->default(0);
            $table->string('satuandasar', 50)->nullable();
            $table->decimal('hargadasar', 35, 20)->nullable()->default(0);
            $table->decimal('jmlretur', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkotagih', 20, 3)->nullable()->default(0);
            $table->string('iddetailserial', 150)->nullable();
            $table->string('origin_tipe', 20)->nullable();
            $table->string('origin_iddt', 150)->nullable();
            $table->string('ori_iddetail', 150)->nullable();
            $table->string('ori_tipe', 20)->nullable();
            $table->string('noserial')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_item_ik');
    }
};
