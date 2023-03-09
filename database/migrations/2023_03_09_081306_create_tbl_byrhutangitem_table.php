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
        Schema::create('tbl_byrhutangitem', function (Blueprint $table) {
            $table->string('iddetail', 150)->nullable();
            $table->string('iddetailitem', 150)->nullable();
            $table->string('notransaksi', 50)->nullable();
            $table->string('kodeitem', 100)->nullable();
            $table->decimal('jmlretur', 20, 3)->nullable();
            $table->decimal('jmllaku', 20, 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_byrhutangitem');
    }
};
