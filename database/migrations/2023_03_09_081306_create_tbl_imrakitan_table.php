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
        Schema::create('tbl_imrakitan', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('iddetailtrs', 150)->nullable()->index('tbl_ikrakitan_detailtrs2');
            $table->string('notransaksi', 50)->nullable()->index('notransaksi4');
            $table->string('tipe', 20)->nullable();
            $table->string('kodeitem', 100)->nullable()->index('kodeitem4');
            $table->string('kodeitemrakitan', 100)->nullable()->index('kodeitemrakitan1');
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->string('satuan', 50)->nullable();
            $table->decimal('harga', 20, 3)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->decimal('jumlahtrs', 20, 3)->nullable()->default(0);
            $table->string('satuantrs', 50)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->decimal('jmlkonversi', 50, 3)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_imrakitan');
    }
};
