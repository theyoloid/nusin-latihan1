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
        Schema::create('tbl_itemrakitan', function (Blueprint $table) {
            $table->string('iddetail', 100)->primary();
            $table->string('kodeitem', 100)->nullable()->index('kodeitem_2');
            $table->string('kodeitemrakitan', 100)->nullable()->index('kodeitemrakitan2');
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->string('satuan', 50)->nullable();
            $table->decimal('harga', 20, 3)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->timestamp('dateupd')->nullable();
            $table->string('jenis', 20)->nullable();

            $table->index(['kodeitem', 'kodeitemrakitan'], 'kodeitem9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemrakitan');
    }
};
