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
        Schema::create('tbl_tagihikdt', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->integer('nobaris')->nullable()->default(0);
            $table->string('notransaksi', 50)->nullable()->index('tbl_ikdt_ikhd_tko');
            $table->string('kodeitem', 100)->nullable()->index('kodeitem1_tko');
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->decimal('jmlpesan', 20, 3)->nullable()->default(0);
            $table->string('satuan', 50)->nullable();
            $table->decimal('harga', 20, 3)->nullable()->default(0);
            $table->decimal('potongan', 35, 20)->nullable()->default(0);
            $table->decimal('potongan2', 35, 20)->nullable()->default(0);
            $table->decimal('potongan3', 35, 20)->nullable()->default(0);
            $table->decimal('potongan4', 35, 20)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->decimal('pajak', 20, 3)->nullable()->default(0);
            $table->decimal('jmlrmasuk', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkeluar', 20, 3)->nullable()->default(0);
            $table->decimal('jmlrkeluar', 20, 3)->nullable()->default(0);
            $table->decimal('jmlsisa', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkonsibayar', 20, 3)->nullable()->default(0);
            $table->string('idorder', 150)->nullable();
            $table->timestamp('dateupd', 6)->nullable();
            $table->string('idtrskonsinyasi', 150)->nullable();
            $table->decimal('jmlretur', 20, 3)->nullable()->default(0);
            $table->text('detinfo')->nullable();
            $table->string('notrskonsinyasi', 100)->nullable();
            $table->decimal('jmlkonversi', 50, 3)->nullable();
            $table->string('iddetailtrs', 150)->nullable();
            $table->integer('xx')->nullable();
            $table->timestamp('tglexp', 6)->nullable();
            $table->string('kodeprod', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tagihikdt');
    }
};
