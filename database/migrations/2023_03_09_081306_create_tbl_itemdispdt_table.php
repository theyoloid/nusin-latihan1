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
        Schema::create('tbl_itemdispdt', function (Blueprint $table) {
            $table->string('kodeitem', 100)->nullable();
            $table->string('satuan', 50)->nullable();
            $table->integer('opsidiskon')->nullable();
            $table->decimal('diskon1', 20, 3)->nullable();
            $table->decimal('diskon2', 20, 3)->nullable();
            $table->decimal('diskon3', 20, 3)->nullable();
            $table->decimal('diskon4', 20, 3)->nullable();
            $table->decimal('disknom1', 40, 20)->nullable();
            $table->decimal('disknom2', 40, 20)->nullable();
            $table->decimal('disknom3', 40, 20)->nullable();
            $table->decimal('disknom4', 40, 20)->nullable();
            $table->string('iddiskon', 50)->nullable();
            $table->string('kgruppel', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemdispdt');
    }
};
