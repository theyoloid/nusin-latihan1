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
        Schema::create('tbl_itemserialmanage', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('periode', 20)->nullable();
            $table->timestamp('tanggal', 6)->nullable();
            $table->string('kodeitem', 100)->index('kodeitem8sm');
            $table->string('kodekantor', 50)->nullable()->index('kodekantor7sm');
            $table->string('satuan', 50)->nullable()->index('satuan2sm');
            $table->decimal('jmlsebelum', 20, 3)->nullable()->default(0);
            $table->decimal('jmlfisik', 20, 3)->nullable()->default(0);
            $table->decimal('jmlselisih', 20, 3)->nullable()->default(0);
            $table->string('kodeacc', 30)->nullable();
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd', 6)->nullable();
            $table->decimal('harga', 20, 3)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->string('compname')->nullable();
            $table->decimal('jmlserial', 20, 3)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemserialmanage');
    }
};
