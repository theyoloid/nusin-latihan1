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
        Schema::create('tbl_usercus_acc', function (Blueprint $table) {
            $table->string('klpakses', 35)->nullable();
            $table->string('modulid', 50)->nullable();
            $table->string('customacc', 50)->nullable();
            $table->string('customval', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_usercus_acc');
    }
};
