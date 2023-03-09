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
        Schema::create('tbl_supelgrup', function (Blueprint $table) {
            $table->string('kgrup', 20)->primary();
            $table->string('grup', 100)->nullable();
            $table->decimal('potongan', 20, 3)->nullable()->default(0);
            $table->integer('levelharga')->nullable();
            $table->decimal('kelipatanpoin', 20, 3)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_supelgrup');
    }
};
