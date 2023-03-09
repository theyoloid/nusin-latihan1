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
        Schema::create('tbl_itemserialdt', function (Blueprint $table) {
            $table->string('noserial')->nullable()->index('noserial');
            $table->string('tipe', 20)->nullable();
            $table->string('notransaksi', 50)->nullable();
            $table->string('iddetail', 150)->nullable();
            $table->string('kodeitem', 100)->nullable();
            $table->string('kodekantor', 50)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->decimal('harga', 35, 20)->nullable()->default(0);
            $table->string('serialtipe', 20)->nullable();
            $table->string('serialiddetail', 150)->nullable();
            $table->string('iddetailrakitan', 150)->nullable();
            $table->string('idtrsretur', 150)->nullable();
            $table->string('statuskotag', 15)->nullable()->default('N');
            $table->string('origin_tipe', 20)->nullable();
            $table->string('origin_iddt', 150)->nullable();

            $table->index(['iddetail', 'notransaksi', 'tipe'], 'tbl_itemserialdt_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemserialdt');
    }
};
