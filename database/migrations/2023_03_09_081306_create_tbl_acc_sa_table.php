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
        Schema::create('tbl_acc_sa', function (Blueprint $table) {
            $table->string('kodeacc', 30);
            $table->date('tanggal')->nullable();
            $table->string('matauang', 20)->nullable()->index('matauang');
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_acc_sa');
    }
};
