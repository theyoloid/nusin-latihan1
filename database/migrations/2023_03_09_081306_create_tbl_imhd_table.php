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
        Schema::create('tbl_imhd', function (Blueprint $table) {
            $table->string('notransaksi', 50)->primary();
            $table->string('kodekantor', 50)->nullable()->index('kodekantor4');
            $table->string('kantortujuan', 50)->nullable()->index('kantortujuan');
            $table->timestamp('tanggal')->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('notrsorder', 50)->nullable();
            $table->string('kodesupel', 50)->nullable()->index('kodesupplier2');
            $table->string('matauang', 50)->nullable()->index('matauang7');
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->text('keterangan')->nullable();
            $table->decimal('totalitem', 20, 3)->nullable()->default(0);
            $table->decimal('totalitempesan', 20, 3)->nullable()->default(0);
            $table->decimal('subtotal', 20, 3)->nullable()->default(0);
            $table->decimal('potfaktur', 25, 10)->nullable()->default(0);
            $table->decimal('pajak', 20, 3)->nullable()->default(0);
            $table->decimal('biayalain', 20, 3)->nullable()->default(0);
            $table->decimal('prpajak', 10, 3)->nullable()->default(0);
            $table->decimal('dppesanan', 20, 3)->nullable()->default(0);
            $table->decimal('jmldeposit', 20, 3)->nullable()->default(0);
            $table->decimal('totalakhir', 20, 3)->nullable()->default(0);
            $table->string('carabayar', 20)->nullable();
            $table->decimal('jmltunai', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkredit', 20, 3)->nullable()->default(0);
            $table->decimal('potnomfaktur', 20, 3)->nullable()->default(0);
            $table->timestamp('byr_krd_jt')->nullable();
            $table->string('byr_krd_no', 30)->nullable();
            $table->decimal('krd_jml_pot', 20, 3)->nullable()->default(0);
            $table->decimal('krd_jml_byr', 20, 3)->nullable()->default(0);
            $table->string('ppn', 30)->nullable();
            $table->string('notrsretur', 100)->nullable();
            $table->string('acc_potongan', 30)->nullable()->comment('POTONGAN');
            $table->string('acc_pajak', 30)->nullable()->comment('PAJAK');
            $table->string('acc_biayalain', 30)->nullable()->comment('BIAYA');
            $table->string('acc_tunai', 30)->nullable();
            $table->string('acc_kredit', 30)->nullable();
            $table->string('acc_hpp', 30)->nullable();
            $table->string('acc_deposit', 30)->nullable();
            $table->string('acc_dppesanan', 30)->nullable();
            $table->string('acc_biaya_pot', 30)->nullable();
            $table->string('acc_beda_cab', 30)->nullable();
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->boolean('biaya_msk_total')->nullable();
            $table->string('compname')->nullable();
            $table->string('shiftkerja', 20)->nullable();
            $table->date('tanggal_sa')->nullable();
            $table->boolean('bc_trf_sts')->nullable()->default(false);
            $table->decimal('tottagihki', 20, 3)->nullable()->default(0);
            $table->decimal('totitemretur', 20, 3)->nullable()->default(0);
            $table->boolean('swt_sa_sts')->nullable()->default(false);
            $table->decimal('prpotfaktur', 25, 10)->nullable();
            $table->string('nofp', 100)->nullable();
            $table->boolean('status_online')->nullable()->default(false);
            $table->string('compname_online')->nullable();
            $table->string('user_online', 50)->nullable();
            $table->string('mode_retur', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_imhd');
    }
};
