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
        Schema::create('tbl_imdt', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->integer('nobaris')->nullable()->default(0);
            $table->string('notransaksi', 50)->nullable()->index('tbl_belidt_belihd1');
            $table->string('kodeitem', 100)->nullable()->index('kodeitem3');
            $table->decimal('jumlah', 35, 20)->nullable()->default(0);
            $table->decimal('jmlpesan', 35, 20)->nullable()->default(0);
            $table->string('satuan', 50)->nullable();
            $table->decimal('harga', 35, 20)->nullable()->default(0);
            $table->decimal('potongan', 35, 20)->nullable()->default(0);
            $table->decimal('total', 20, 3)->nullable()->default(0);
            $table->decimal('pajak', 20, 3)->nullable()->default(0);
            $table->decimal('hargadsr', 20, 3)->nullable()->default(0);
            $table->string('satuandsr', 50)->nullable();
            $table->decimal('jmlmasuk', 20, 3)->nullable()->default(0);
            $table->decimal('jmlrmasuk', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkeluar', 20, 3)->nullable()->default(0);
            $table->decimal('jmlrkeluar', 20, 3)->nullable()->default(0);
            $table->decimal('jmlsisa', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkonsibayar', 20, 3)->nullable()->default(0);
            $table->decimal('jmlretur', 20, 3)->nullable()->default(0);
            $table->timestamp('tglexp')->nullable();
            $table->string('idtrsretur', 150)->nullable();
            $table->string('kodeprod', 100)->nullable();
            $table->string('idorder', 150)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->string('sakantor', 50)->nullable();
            $table->text('detinfo')->nullable();
            $table->decimal('pothutang', 50, 3)->nullable();
            $table->string('notrsretur', 100)->nullable();
            $table->decimal('jmlkonversi', 50, 3)->nullable()->default(0);
            $table->decimal('jmlprosesrakit', 20, 3)->nullable()->default(0);
            $table->decimal('jmltagihki', 20, 3)->nullable()->default(0);
            $table->decimal('potongan2', 35, 20)->nullable()->default(0);
            $table->decimal('potongan3', 35, 20)->nullable()->default(0);
            $table->decimal('potongan4', 35, 20)->nullable()->default(0);
            $table->decimal('hppdasar', 35, 20)->nullable()->default(0);

            $table->index(['iddetail'], 'iddetail1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_imdt');
    }
};
