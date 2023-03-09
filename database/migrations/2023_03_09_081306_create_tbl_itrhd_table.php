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
        Schema::create('tbl_itrhd', function (Blueprint $table) {
            $table->string('notransaksi', 50)->primary();
            $table->string('kodekantor', 50)->nullable()->index('kodekantor9');
            $table->string('kantordari', 50)->nullable()->index('kantordari1');
            $table->string('kantortujuan', 50)->nullable()->index('kantortujuan1');
            $table->timestamp('tanggal')->nullable();
            $table->string('tipe', 20)->nullable();
            $table->text('keterangan')->nullable();
            $table->string('acc_persediaan', 30)->nullable()->index('acc_hpp');
            $table->decimal('totalitem', 20, 3)->nullable()->default(0);
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->string('shiftkerja', 20)->nullable();
            $table->string('mob_owner_id', 20)->nullable();
            $table->boolean('mob_trf_sts')->nullable();
            $table->boolean('bc_trf_sts')->nullable()->default(false)->comment('status transfer beda cabang. digunakan oleh web app');
            $table->boolean('status_online')->nullable()->default(false);
            $table->string('compname_online')->nullable();
            $table->string('user_online', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itrhd');
    }
};
