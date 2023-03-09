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
        Schema::create('tbl_itemserial', function (Blueprint $table) {
            $table->string('noserial')->primary();
            $table->string('kodeitem', 100)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->string('kodekantor', 50)->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('notransaksi', 50)->nullable();
            $table->string('iddetail', 150)->nullable();
            $table->decimal('harga', 35, 20)->nullable()->default(0);
            $table->string('origin_tipe', 20)->nullable();
            $table->string('origin_iddt', 150)->nullable();

            $table->index(['kodeitem', 'kodekantor', 'tipe', 'notransaksi'], 'tbl_itemserial_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemserial');
    }
};
