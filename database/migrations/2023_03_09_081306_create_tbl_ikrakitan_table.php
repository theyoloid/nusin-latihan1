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
        Schema::create('tbl_ikrakitan', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('iddetailtrs', 150)->nullable()->index('tbl_ikrakitan_detailtrs1');
            $table->string('notransaksi', 50)->nullable()->index('notransaksi3');
            $table->string('tipe', 20)->nullable();
            $table->string('kodeitem', 100)->nullable()->index('kodeitem2');
            $table->string('kodeitemrakitan', 100)->nullable()->index('kodeitemrakitan');
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->string('satuan', 50)->nullable();
            $table->decimal('harga', 20, 3)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->decimal('jumlahtrs', 20, 3)->nullable()->default(0);
            $table->string('satuantrs', 50)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->string('jenisrakit', 20)->nullable();
            $table->decimal('totalhppitem', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkonversi', 50, 3)->nullable()->default(0);
            $table->decimal('hppdasar', 35, 20)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ikrakitan');
    }
};
