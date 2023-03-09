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
        Schema::create('tbl_userakses', function (Blueprint $table) {
            $table->string('klpakses', 35)->nullable();
            $table->string('modulid', 50)->nullable();
            $table->boolean('mopen')->nullable()->default(false);
            $table->boolean('mnew')->nullable()->default(false);
            $table->boolean('medit')->nullable()->default(false);
            $table->boolean('mdel')->nullable()->default(false);
            $table->boolean('mlock')->nullable()->default(false);
            $table->integer('urut')->nullable()->default(0);
            $table->integer('kelompok')->nullable();
            $table->boolean('mlocktgl')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_userakses');
    }
};
