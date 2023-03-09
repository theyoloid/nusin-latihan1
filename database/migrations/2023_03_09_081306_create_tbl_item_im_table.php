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
        Schema::create('tbl_item_im', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('iddetailtrs', 150)->nullable()->index('tbl_item_im_iddetailtrs');
            $table->enum('notransaksi', [''])->nullable()->index('tbl_item_im_notrs');
            $table->string('kodekantor', 50)->nullable();
            $table->timestamp('tanggal')->nullable();
            $table->timestamp('tgl_trs')->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('matauang', 50)->nullable();
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->string('kodeitem', 100)->nullable();
            $table->decimal('jumlahdasar', 20, 3)->nullable()->default(0);
            $table->string('satuandasar', 50)->nullable();
            $table->decimal('hargadasar', 35, 20)->nullable()->default(0);
            $table->decimal('masuk', 20, 3)->nullable()->default(0);
            $table->decimal('keluar', 20, 3)->nullable()->default(0);
            $table->decimal('remasuk', 20, 3)->nullable()->default(0);
            $table->decimal('rekeluar', 20, 3)->nullable()->default(0);
            $table->decimal('transfer', 20, 3)->nullable()->default(0);
            $table->decimal('sisa', 20, 3)->nullable()->default(0);
            $table->decimal('keluar_konsi', 20, 3)->nullable()->default(0);
            $table->decimal('rekeluar_konsi', 20, 3)->nullable()->default(0);
            $table->decimal('remasuk_konsi', 20, 3)->nullable()->default(0);
            $table->decimal('sisa_konsi', 20, 3)->nullable()->default(0);
            $table->smallInteger('flagavg')->nullable()->default(0);
            $table->string('origin_iddt', 150)->nullable();
            $table->string('origin_tipe', 20)->nullable();
            $table->string('ori_iddetail', 150)->nullable();
            $table->string('ori_tipe', 20)->nullable();
            $table->string('ori_id_trf', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_item_im');
    }
};
