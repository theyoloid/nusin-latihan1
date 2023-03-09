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
        Schema::create('tbl_itemserial_kotag', function (Blueprint $table) {
            $table->string('noserial')->primary();
            $table->string('kodeitem', 100)->nullable();
            $table->timestamp('dateupd', 6)->nullable();
            $table->string('kodekantor', 50)->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('notransaksi', 50)->nullable();
            $table->string('iddetail', 150)->nullable();
            $table->decimal('harga', 20, 3)->nullable()->default(0);
            $table->string('iddetailtrs', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemserial_kotag');
    }
};
