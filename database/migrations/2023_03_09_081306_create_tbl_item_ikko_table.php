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
        Schema::create('tbl_item_ikko', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('iddetailik', 150)->nullable();
            $table->string('iddetailtrs', 150)->nullable();
            $table->string('notransaksi', 100)->nullable();
            $table->string('kodeitem', 100)->nullable();
            $table->decimal('jumlahdasar', 35, 20)->nullable()->default(0);
            $table->decimal('hargadasar', 35, 20)->nullable()->default(0);
            $table->string('iddetailserial', 150)->nullable();

            $table->index(['notransaksi', 'iddetailtrs', 'iddetailik'], 'tbl_item_ikko_iddetail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_item_ikko');
    }
};
