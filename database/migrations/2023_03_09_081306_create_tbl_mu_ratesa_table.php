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
        Schema::create('tbl_mu_ratesa', function (Blueprint $table) {
            $table->string('matauang', 50)->nullable();
            $table->timestamp('tanggal')->nullable();
            $table->decimal('rate', 35, 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_mu_ratesa');
    }
};
