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
        Schema::create('tbl_itemsatuan', function (Blueprint $table) {
            $table->string('satuan', 50)->primary();
            $table->string('ketsatuan', 100)->nullable();
            $table->decimal('konversi', 20, 3)->nullable()->default(0);
            $table->string('satuankonversi', 50)->nullable()->index('satuankonversi');
            $table->boolean('utama')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemsatuan');
    }
};
