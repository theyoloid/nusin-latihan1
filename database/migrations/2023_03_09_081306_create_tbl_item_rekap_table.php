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
        Schema::create('tbl_item_rekap', function (Blueprint $table) {
            $table->string('kodeitem', 100)->nullable()->index('kodeitem5');
            $table->string('kodekantor', 50)->nullable()->index('kodekantor5');
            $table->integer('bulan')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('satuan', 50)->nullable();
            $table->decimal('awal', 20, 3)->nullable()->default(0);
            $table->decimal('awal_nilai', 20, 3)->nullable()->default(0);
            $table->decimal('awal_total', 20, 3)->nullable()->default(0);
            $table->decimal('masuk', 20, 3)->nullable()->default(0);
            $table->decimal('masuk_nilai', 20, 3)->nullable()->default(0);
            $table->decimal('masuk_total', 20, 3)->nullable()->default(0);
            $table->decimal('keluar', 20, 3)->nullable()->default(0);
            $table->decimal('keluar_nilai', 20, 3)->nullable()->default(0);
            $table->decimal('keluar_total', 20, 3)->nullable()->default(0);
            $table->decimal('akhir', 20, 3)->nullable()->default(0);
            $table->decimal('akhir_nilai', 20, 3)->nullable()->default(0);
            $table->decimal('akhir_total', 20, 3)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_item_rekap');
    }
};
