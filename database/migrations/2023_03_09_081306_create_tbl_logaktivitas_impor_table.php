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
        Schema::create('tbl_logaktivitas_impor', function (Blueprint $table) {
            $table->string('object', 100);
            $table->string('value', 100)->nullable();
            $table->string('description', 100);
            $table->string('user1', 30);
            $table->string('shift', 20)->nullable();
            $table->string('compname', 200);
            $table->string('kodekantor', 20);
            $table->timestamp('dateupd', 6);
            $table->string('id', 100)->primary();
            $table->string('nama_app', 20)->nullable();
            $table->string('versi_app', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_logaktivitas_impor');
    }
};