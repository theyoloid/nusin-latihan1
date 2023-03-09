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
        Schema::create('tbl_ikdt', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->integer('nobaris')->nullable()->default(0);
            $table->string('notransaksi', 50)->nullable()->index('tbl_ikdt_ikhd');
            $table->string('kodeitem', 100)->nullable()->index('kodeitem1');
            $table->decimal('jumlah', 35, 20)->nullable()->default(0);
            $table->decimal('jmlpesan', 35, 20)->nullable()->default(0);
            $table->string('satuan', 50)->nullable();
            $table->decimal('harga', 35, 20)->nullable()->default(0);
            $table->decimal('potongan', 35, 20)->nullable()->default(0);
            $table->decimal('potongan2', 35, 20)->nullable()->default(0);
            $table->decimal('potongan3', 35, 20)->nullable()->default(0);
            $table->decimal('potongan4', 35, 20)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->decimal('pajak', 20, 3)->nullable()->default(0);
            $table->decimal('jmlrmasuk', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkeluar', 20, 3)->nullable()->default(0);
            $table->decimal('jmlrkeluar', 20, 3)->nullable()->default(0);
            $table->decimal('jmlsisa', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkonsibayar', 20, 3)->nullable()->default(0);
            $table->string('idorder', 150)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->string('idtrsretur', 150)->nullable();
            $table->decimal('jmlretur', 20, 3)->nullable()->default(0);
            $table->text('detinfo')->nullable();
            $table->string('notrsretur', 100)->nullable();
            $table->decimal('potpiutang', 50, 3)->nullable();
            $table->decimal('jmlkonversi', 50, 3)->nullable()->default(0);
            $table->decimal('jmlterimajadi', 20, 3)->nullable()->default(0);
            $table->string('sistemhargajual', 1)->nullable();
            $table->string('tipepromo', 15)->nullable()->default('N');
            $table->decimal('jmlgratis', 20, 3)->nullable()->default(0);
            $table->string('itempromo', 100)->nullable();
            $table->string('satuanpromo', 50)->nullable();
            $table->decimal('hppdasar', 35, 20)->nullable()->default(0);
            $table->boolean('tebus')->nullable()->default(false);
            $table->timestamp('tglexp', 6)->nullable();
            $table->string('kodeprod', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ikdt');
    }
};
