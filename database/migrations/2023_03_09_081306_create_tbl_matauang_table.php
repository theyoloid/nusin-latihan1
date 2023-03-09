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
        Schema::create('tbl_matauang', function (Blueprint $table) {
            $table->string('matauang', 50)->primary();
            $table->string('ketmatauang', 100)->nullable();
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->boolean('utama')->nullable()->default(false);
            $table->string('acc_hutang', 50)->nullable()->index('acc_hutang');
            $table->string('acc_piutang', 50)->nullable()->index('acc_piutang');
            $table->string('acc_byrtunai', 50)->nullable();
            $table->string('acc_byrbank', 50)->nullable();
            $table->string('tipe', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_matauang');
    }
};
