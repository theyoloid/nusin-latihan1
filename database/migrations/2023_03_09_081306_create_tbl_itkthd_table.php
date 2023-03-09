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
        Schema::create('tbl_itkthd', function (Blueprint $table) {
            $table->string('notransaksi', 50)->primary();
            $table->string('kodekantor', 50)->nullable()->index('kodekantor3tkt');
            $table->string('kantordari', 50)->nullable()->index('kantordaritkt');
            $table->timestamp('tanggal', 6)->nullable();
            $table->string('tipe', 20)->nullable();
            $table->string('notrsorder', 50)->nullable();
            $table->string('kodesupel', 50)->nullable()->index('kodesupel1tkt');
            $table->string('kodesales', 50)->nullable()->index('kodesalestkt');
            $table->string('kodesales2', 50)->nullable()->index('kodesales2tkt');
            $table->string('kodesales3', 50)->nullable()->index('kodesales3tkt');
            $table->string('kodesales4', 50)->nullable();
            $table->string('matauang', 50)->nullable()->index('matauang6tkt');
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->text('keterangan')->nullable();
            $table->decimal('totalitemin', 20, 3)->nullable()->default(0);
            $table->decimal('totalitemout', 20, 3)->nullable()->default(0);
            $table->decimal('totalitempesan', 20, 3)->nullable()->default(0);
            $table->decimal('subtotal', 20, 3)->nullable()->default(0);
            $table->decimal('subtoin', 20, 3)->nullable()->default(0);
            $table->decimal('subtotout', 20, 3)->nullable()->default(0);
            $table->decimal('potfaktur', 25, 10)->nullable()->default(0);
            $table->decimal('pajakin', 20, 3)->nullable()->default(0);
            $table->decimal('prpajakin', 10, 3)->nullable()->default(0);
            $table->decimal('pajakout', 20, 3)->nullable()->default(0);
            $table->decimal('prpajakout', 10, 3)->nullable()->default(0);
            $table->decimal('biayalain', 20, 3)->nullable()->default(0);
            $table->decimal('totalakhir', 20, 3)->nullable()->default(0);
            $table->string('carabayar', 20)->nullable();
            $table->decimal('jmltunai', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkredit', 20, 3)->nullable()->default(0);
            $table->decimal('jmldebit', 20, 3)->nullable()->default(0);
            $table->decimal('jmlkk', 20, 3)->nullable()->default(0);
            $table->decimal('dppesanan', 20, 3)->nullable()->default(0);
            $table->decimal('komisi1', 20, 3)->nullable()->default(0);
            $table->decimal('komisi2', 20, 3)->nullable()->default(0);
            $table->decimal('komisi3', 20, 3)->nullable()->default(0);
            $table->decimal('komisi4', 20, 3)->nullable()->default(0);
            $table->string('nofp', 100)->nullable();
            $table->string('acc_potongan', 30)->nullable()->comment('POTONGAN');
            $table->string('acc_pajak_in', 30)->nullable()->comment('PAJAK MASUKAN');
            $table->string('acc_pajak', 30)->nullable()->comment('PAJAK KELUARAN');
            $table->string('acc_biayalain', 30)->nullable()->comment('BIAYA');
            $table->string('acc_tunai', 30)->nullable()->comment('BAYAR TUNAI');
            $table->string('acc_kredit', 30)->nullable()->comment('BAYAR KREDIT');
            $table->string('acc_sales', 30)->nullable()->comment('SALES');
            $table->string('acc_hpp', 30)->nullable();
            $table->string('acc_debit', 30)->nullable();
            $table->string('acc_kk', 30)->nullable();
            $table->string('acc_deposit', 30)->nullable()->comment('BAYAR DEPOSIT');
            $table->string('acc_dppesanan', 30)->nullable();
            $table->string('acc_biaya_pot', 30)->nullable();
            $table->timestamp('byr_krd_jt', 6)->nullable();
            $table->string('byr_krd_no', 30)->nullable();
            $table->string('byr_debit_bank', 30)->nullable();
            $table->string('byr_kk_bank', 30)->nullable();
            $table->string('byr_debit_no', 100)->nullable();
            $table->string('byr_kk_no', 100)->nullable();
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
            $table->decimal('point_ik', 20, 3)->nullable()->default(0);
            $table->integer('point_sts')->nullable()->default(0);
            $table->string('notrsretur', 100)->nullable();
            $table->string('point_notrans', 50)->nullable();
            $table->decimal('jmldeposit', 20, 3)->nullable()->default(0);
            $table->string('ppn', 30)->nullable();
            $table->boolean('byr_komisi1')->nullable();
            $table->boolean('byr_komisi2')->nullable();
            $table->boolean('byr_komisi3')->nullable();
            $table->boolean('byr_komisi4')->nullable();
            $table->boolean('bc_trf_sts')->nullable()->default(false);
            $table->boolean('status_online')->nullable()->default(false);
            $table->string('compname_online')->nullable();
            $table->string('user_online', 50)->nullable();
            $table->decimal('jmlemoney', 20, 3)->nullable()->default(0);
            $table->string('byr_emoney_no', 100)->nullable();
            $table->string('byr_emoney_prod', 30)->nullable();
            $table->string('acc_emoney', 30)->nullable();
            $table->string('acc_sales_hut', 30)->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itkthd');
    }
};
