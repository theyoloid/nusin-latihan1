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
        Schema::create('tbl_itemdisp', function (Blueprint $table) {
            $table->string('iddiskon', 50)->primary();
            $table->string('kodeitemd', 100)->nullable();
            $table->string('kodeitems', 100)->nullable();
            $table->string('jenis', 50)->nullable();
            $table->string('merek', 50)->nullable();
            $table->timestamp('tgldari', 6)->nullable();
            $table->timestamp('tglsampai', 6)->nullable();
            $table->decimal('pot1', 20, 3)->nullable()->default(0);
            $table->decimal('pot2', 20, 3)->nullable()->default(0);
            $table->decimal('pot3', 20, 3)->nullable()->default(0);
            $table->decimal('pot4', 20, 3)->nullable()->default(0);
            $table->boolean('stsact')->nullable()->default(false);
            $table->string('tipeper', 10)->nullable();
            $table->timestamp('jamdari')->nullable();
            $table->timestamp('jamsampai')->nullable();
            $table->boolean('w1')->nullable()->default(false);
            $table->boolean('w2')->nullable()->default(false);
            $table->boolean('w3')->nullable()->default(false);
            $table->boolean('w4')->nullable()->default(false);
            $table->boolean('w5')->nullable()->default(false);
            $table->boolean('w6')->nullable()->default(false);
            $table->boolean('w7')->nullable()->default(false);
            $table->decimal('prioritas', 10, 0)->nullable()->default(0);
            $table->boolean('stsvcr')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemdisp');
    }
};
