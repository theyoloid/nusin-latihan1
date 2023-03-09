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
        Schema::create('tbl_tagihimhd', function (Blueprint $table) {
            $table->string('notransaksi', 50)->primary();
            $table->string('kodekantor', 50)->nullable()->index('kodekantor4_tki');
            $table->string('kantortujuan', 50)->nullable()->index('kantortujuan_tki');
            $table->timestamp('tanggal', 6)->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('notrsorder', 50)->nullable();
            $table->string('kodesupel', 50)->nullable()->index('kodesupplier2_tki');
            $table->string('matauang', 50)->nullable()->index('matauang7_tki');
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->text('keterangan')->nullable();
            $table->decimal('totalitem', 20, 3)->nullable()->default(0);
            $table->decimal('totalitempesan', 20, 3)->nullable()->default(0);
            $table->decimal('subtotal', 20, 3)->nullable()->default(0);
            $table->decimal('potfaktur', 25, 10)->nullable()->default(0);
            $table->decimal('pajak', 20, 3)->nullable()->default(0);
            $table->decimal('biayalain', 20, 3)->nullable()->default(0);
            $table->decimal('totalakhir', 20, 3)->nullable()->default(0);
            $table->string('carabayar', 20)->nullable();
            $table->decimal('jmltunai', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkredit', 20, 3)->nullable()->default(0);
            $table->string('acc_potongan', 30)->nullable()->comment('POTONGAN');
            $table->string('acc_pajak', 30)->nullable()->comment('PAJAK');
            $table->string('acc_biayalain', 30)->nullable()->comment('BIAYA');
            $table->string('acc_tunai', 30)->nullable();
            $table->string('acc_kredit', 30)->nullable();
            $table->string('acc_hpp', 30)->nullable();
            $table->string('acc_tagihan', 30)->nullable();
            $table->string('acc_dppesanan', 30)->nullable();
            $table->string('acc_biaya_pot', 30)->nullable();
            $table->timestamp('byr_krd_jt', 6)->nullable();
            $table->string('byr_krd_no', 30)->nullable();
            $table->decimal('krd_jml_pot', 20, 3)->nullable()->default(0);
            $table->decimal('krd_jml_byr', 20, 3)->nullable()->default(0);
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd', 6)->nullable();
            $table->date('tanggal_sa')->nullable();
            $table->boolean('biaya_msk_total')->nullable();
            $table->decimal('potnomfaktur', 20, 3)->nullable()->default(0);
            $table->string('compname')->nullable();
            $table->string('shiftkerja', 20)->nullable();
            $table->decimal('prpajak', 10, 3)->nullable()->default(0);
            $table->decimal('dppesanan', 20, 3)->nullable()->default(0);
            $table->string('notrsretur', 100)->nullable();
            $table->string('ppn', 30)->nullable();
            $table->decimal('totallaku', 20, 3)->nullable();
            $table->decimal('totalretur', 20, 3)->nullable();
            $table->decimal('totalkonsinyasi', 20, 3)->nullable();
            $table->boolean('bc_trf_sts')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tagihimhd');
    }
};
