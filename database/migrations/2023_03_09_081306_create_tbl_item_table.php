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
        Schema::create('tbl_item', function (Blueprint $table) {
            $table->string('kodeitem', 100)->unique('kodeitem');
            $table->text('namaitem')->nullable();
            $table->string('jenis', 50)->nullable()->index('jenis');
            $table->string('tipe', 15)->nullable()->default('Y');
            $table->string('matauang', 50)->nullable()->index('matauang8');
            $table->string('serial', 15)->nullable()->default('N');
            $table->string('konsinyasi', 15)->nullable()->default('N');
            $table->decimal('stokmin', 20, 3)->nullable()->default(0);
            $table->string('sistemhargajual', 1)->nullable()->default('J');
            $table->boolean('opsihargajual')->nullable()->default(true);
            $table->string('rak', 100)->nullable();
            $table->string('satuan', 50)->nullable()->index('satuan');
            $table->decimal('hargapokok', 35, 20)->nullable()->default(0);
            $table->decimal('prhargajual1', 20, 3)->nullable()->default(0);
            $table->decimal('hargajual1', 20, 3)->nullable()->default(0);
            $table->text('keterangan')->nullable();
            $table->string('supplier1', 50)->nullable();
            $table->string('supplier2', 50)->nullable();
            $table->string('supplier3', 50)->nullable();
            $table->binary('gambar')->nullable();
            $table->string('statusjual', 15)->nullable();
            $table->string('merek', 50)->nullable();
            $table->string('hppsys', 10)->nullable();
            $table->decimal('sistempajak', 10, 0)->nullable()->default(0);
            $table->boolean('opsiflexhargajual')->nullable()->default(true);
            $table->decimal('hargarakit', 20, 3)->nullable()->default(0);
            $table->string('statushapus', 15)->nullable();
            $table->decimal('stok', 20, 3)->nullable()->default(0);
            $table->string('dept', 50)->nullable();
            $table->string('pendingin', 15)->nullable()->default('N');
            $table->string('acc_hpp', 30)->nullable();
            $table->string('acc_pendapatan', 30)->nullable();
            $table->string('acc_persediaan', 30)->nullable();
            $table->string('acc_jasa', 30)->nullable();
            $table->string('acc_noninventory', 30)->nullable();
            $table->string('acc_perbahanbaku', 30)->nullable();
            $table->string('acc_bytenagakerja', 30)->nullable();
            $table->string('acc_byoverhead', 30)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->decimal('tmphp', 20, 3)->nullable()->default(0);
            $table->decimal('tmpjml', 20, 3)->nullable()->default(0);
            $table->decimal('tmpnilai', 20, 3)->nullable()->default(0);
            $table->text('gambarfiles')->nullable();
            $table->timestamp('tanggal_add')->nullable();
            $table->boolean('opsihargarakitan')->nullable()->default(false);
            $table->boolean('nonpajakex')->nullable()->default(false);
            $table->boolean('opsidefhargapokok')->nullable()->default(false);

            $table->primary(['kodeitem']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_item');
    }
};
