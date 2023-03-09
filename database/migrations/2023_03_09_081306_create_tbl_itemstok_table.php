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
        Schema::create('tbl_itemstok', function (Blueprint $table) {
            $table->string('kodeitem', 100)->nullable();
            $table->string('kantor', 50)->nullable();
            $table->decimal('stok', 20, 3)->nullable();
            $table->decimal('hppdasar', 35, 20)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemstok');
    }
};
