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
        Schema::create('tbl_ref_retur', function (Blueprint $table) {
            $table->string('iddetail', 150);
            $table->string('notransaksi', 50)->nullable();
            $table->string('iddetailim', 150)->nullable();
            $table->string('kodeitem', 150)->nullable();
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ref_retur');
    }
};
