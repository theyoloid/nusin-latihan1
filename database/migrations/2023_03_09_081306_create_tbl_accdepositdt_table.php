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
        Schema::create('tbl_accdepositdt', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->integer('nobaris')->nullable();
            $table->string('notransaksi', 50)->nullable()->index('notransaksi_depo');
            $table->string('kodeacc', 30)->nullable();
            $table->string('matauang', 50)->nullable();
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->timestamp('dateupd', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_accdepositdt');
    }
};
