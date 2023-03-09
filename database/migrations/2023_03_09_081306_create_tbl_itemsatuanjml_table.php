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
        Schema::create('tbl_itemsatuanjml', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('kodeitem', 100)->nullable()->index('kodeitem10');
            $table->string('satuan', 30)->nullable()->index('satuan3');
            $table->decimal('jumlahkonv', 20, 3)->nullable()->default(0);
            $table->string('kodebarcode', 100)->nullable()->unique('kodebarcode');
            $table->decimal('hargapokok', 35, 20)->nullable()->default(0);
            $table->string('tipe', 20)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->decimal('poin', 10, 0)->nullable();
            $table->decimal('komisisales', 20, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemsatuanjml');
    }
};
