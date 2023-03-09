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
        Schema::create('tbl_formatnosp', function (Blueprint $table) {
            $table->string('trid', 5)->primary();
            $table->bigInteger('nomor')->nullable();
            $table->string('slot1', 10)->nullable();
            $table->string('slot2', 10)->nullable();
            $table->string('slot3', 10)->nullable();
            $table->string('sep1', 2)->nullable();
            $table->string('sep2', 2)->nullable();
            $table->integer('numdgt')->nullable();
            $table->string('lastnom', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_formatnosp');
    }
};
