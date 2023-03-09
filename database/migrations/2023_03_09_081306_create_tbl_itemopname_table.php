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
        Schema::create('tbl_itemopname', function (Blueprint $table) {
            $table->string('iddetail', 150)->unique('tbl_itemopname_iddetail_key');
            $table->string('periode', 20)->nullable();
            $table->timestamp('tanggal')->nullable();
            $table->string('kodeitem', 100)->index('kodeitem8');
            $table->string('kodekantor', 50)->nullable()->index('kodekantor7');
            $table->string('satuan', 50)->nullable()->index('satuan2');
            $table->decimal('jmlsebelum', 20, 3)->nullable()->default(0);
            $table->decimal('jmlfisik', 20, 3)->nullable()->default(0);
            $table->decimal('jmlselisih', 20, 3)->nullable()->default(0);
            $table->string('kodeacc', 30)->nullable()->index('kodeacc1');
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->decimal('harga', 35, 20)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->string('compname')->nullable();
            $table->decimal('jmlkonversi', 20, 3)->nullable()->default(0);
            $table->decimal('hppdasar', 35, 20)->nullable()->default(0);
            $table->boolean('bc_trf_sts')->nullable()->default(false);
            $table->text('keterangan')->nullable();

            $table->primary(['iddetail']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemopname');
    }
};
