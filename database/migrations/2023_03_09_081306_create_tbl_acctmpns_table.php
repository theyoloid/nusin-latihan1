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
        Schema::create('tbl_acctmpns', function (Blueprint $table) {
            $table->string('kodeacc', 30)->nullable();
            $table->string('kelompok', 5)->nullable();
            $table->string('matauang', 50)->nullable();
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->decimal('rdebet', 20, 3)->nullable()->default(0);
            $table->decimal('rkredit', 20, 3)->nullable()->default(0);
            $table->decimal('debet', 20, 3)->nullable()->default(0);
            $table->decimal('kredit', 20, 3)->nullable()->default(0);
            $table->decimal('pdebet', 20, 3)->nullable()->default(0);
            $table->decimal('pkredit', 20, 3)->nullable()->default(0);
            $table->decimal('tdebet', 20, 3)->nullable()->default(0);
            $table->decimal('tkredit', 20, 3)->nullable()->default(0);
            $table->decimal('lrdebet', 20, 3)->nullable()->default(0);
            $table->decimal('lrkredit', 20, 3)->nullable()->default(0);
            $table->decimal('ndebet', 20, 3)->nullable()->default(0);
            $table->decimal('nkredit', 20, 3)->nullable()->default(0);
            $table->string('usergen', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_acctmpns');
    }
};
