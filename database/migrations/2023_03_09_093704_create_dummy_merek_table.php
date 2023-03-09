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
        Schema::create('dummy_merek', function (Blueprint $table) {
            $table->increments('id_item');
            $table->string('nama', 50)->nullable();
            $table->string('indo', 50)->nullable();
            $table->string('nestle', 50)->nullable();
            $table->string('indofood', 50)->nullable();
            $table->string('rkn', 50)->nullable();
            $table->string('ichidai', 50)->nullable();
            $table->string('jap', 50)->nullable();
            $table->string('beclin', 50)->nullable();
            $table->string('xtrm', 50)->nullable();
            $table->string('xtra', 50)->nullable();
            $table->string('trheebon', 50)->nullable();
            $table->string('auto', 50)->nullable();
            $table->string('bintang', 50)->nullable();
            $table->string('dnd', 50)->nullable();
            $table->string('rossi', 50)->nullable();
            $table->string('blackstone', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dummy_merek');
    }
};
