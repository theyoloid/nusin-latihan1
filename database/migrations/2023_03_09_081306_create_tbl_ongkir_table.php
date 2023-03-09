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
        Schema::create('tbl_ongkir', function (Blueprint $table) {
            $table->string('id', 150)->primary();
            $table->string('expedisi', 50)->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('negara', 100)->nullable();
            $table->decimal('biaya1', 20, 3)->nullable()->default(0);
            $table->decimal('biaya2', 20, 3)->nullable()->default(0);
            $table->decimal('biaya3', 20, 3)->nullable()->default(0);
            $table->text('keterangan')->nullable();
            $table->string('kotatujuan', 100)->nullable();
            $table->string('kodekantor', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ongkir');
    }
};
