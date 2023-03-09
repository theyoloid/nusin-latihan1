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
        Schema::create('tbl_acc_tmplrnr', function (Blueprint $table) {
            $table->string('kodeacc', 50)->nullable();
            $table->integer('urut')->nullable()->default(0);
            $table->string('tipeacc', 5)->nullable();
            $table->string('sub1', 100)->nullable();
            $table->string('sub2', 100)->nullable();
            $table->string('sub3', 100)->nullable();
            $table->string('sub4', 100)->nullable();
            $table->string('sub5', 100)->nullable();
            $table->string('sub6', 100)->nullable();
            $table->decimal('nilai', 35, 20)->nullable();
            $table->integer('setsub')->nullable();
            $table->string('usergen', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_acc_tmplrnr');
    }
};
