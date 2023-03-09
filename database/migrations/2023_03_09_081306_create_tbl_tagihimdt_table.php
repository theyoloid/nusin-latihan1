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
        Schema::create('tbl_tagihimdt', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->integer('nobaris')->nullable()->default(0);
            $table->string('notransaksi', 50)->nullable()->index('tbl_belidt_belihd1_tki');
            $table->string('kodeitem', 100)->nullable()->index('kodeitem3_tki');
            $table->decimal('jmlkonsi', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkonsiretur', 20, 3)->nullable()->default(0);
            $table->string('satuan', 50)->nullable();
            $table->decimal('harga', 20, 3)->nullable()->default(0);
            $table->decimal('potongan', 35, 20)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->decimal('pajak', 20, 3)->nullable()->default(0);
            $table->decimal('jmllaku', 20, 3)->nullable()->default(0);
            $table->decimal('jmlreturjual', 20, 3)->nullable()->default(0);
            $table->decimal('jmlsisa', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkonsibayar', 20, 3)->nullable()->default(0);
            $table->timestamp('tglexp', 6)->nullable();
            $table->string('idtrsretur', 150)->nullable();
            $table->string('kodeprod', 100)->nullable();
            $table->string('idorder', 150)->nullable();
            $table->timestamp('dateupd', 6)->nullable();
            $table->string('sakantor', 50)->nullable();
            $table->text('detinfo')->nullable();
            $table->decimal('pothutang', 20, 3)->nullable();
            $table->string('notrsretur', 100)->nullable();
            $table->decimal('jmlkonversi', 20, 3)->nullable();
            $table->decimal('nom_pajak', 20, 3)->nullable();
            $table->decimal('jmlkeluar', 20, 3)->nullable();

            $table->index(['iddetail'], 'iddetail1_tki');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tagihimdt');
    }
};
