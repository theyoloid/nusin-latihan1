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
        Schema::create('tbl_bank', function (Blueprint $table) {
            $table->string('kodebank', 30)->primary();
            $table->string('namabank', 100)->nullable();
            $table->string('acc_kd', 30)->nullable();
            $table->string('acc_kk', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bank');
    }
};
