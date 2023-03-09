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
        Schema::create('tbl_itempotongan', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('kodeitem', 100)->nullable();
            $table->string('kodegrup', 50)->nullable();
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->decimal('pot1', 20, 3)->nullable()->default(0);
            $table->decimal('pot2', 20, 3)->nullable()->default(0);
            $table->decimal('pot3', 20, 3)->nullable()->default(0);
            $table->decimal('pot4', 20, 3)->nullable()->default(0);
            $table->timestamp('dateupd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itempotongan');
    }
};
