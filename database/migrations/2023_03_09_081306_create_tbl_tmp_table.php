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
        Schema::create('tbl_tmp', function (Blueprint $table) {
            $table->bigInteger('cntprsjurnal')->nullable();
            $table->integer('cntlevelrep')->nullable()->default(0);
            $table->integer('cntsortrep')->nullable()->default(0);
            $table->bigInteger('cnt_im')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tmp');
    }
};
