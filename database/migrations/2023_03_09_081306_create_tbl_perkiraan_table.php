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
        Schema::create('tbl_perkiraan', function (Blueprint $table) {
            $table->string('kodeacc', 30)->primary();
            $table->string('parentacc', 30)->nullable();
            $table->string('kelompok', 2)->nullable();
            $table->string('tipe', 2)->nullable();
            $table->string('namaacc', 200)->nullable();
            $table->string('matauang', 50)->nullable()->index('matauang9');
            $table->timestamp('dateupd')->nullable();
            $table->boolean('kasbank')->nullable()->default(false);
            $table->boolean('defmuutm')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_perkiraan');
    }
};
