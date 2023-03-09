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
        Schema::create('tbl_pesanhd', function (Blueprint $table) {
            $table->string('notransaksi', 50)->primary();
            $table->string('kodekantor', 50)->nullable()->index('kodekantor11');
            $table->string('kantortujuan', 50)->nullable()->index('kantortujuan2');
            $table->timestamp('tanggal')->nullable();
            $table->string('tipe', 20)->nullable();
            $table->timestamp('tanggalkirim')->nullable();
            $table->string('jenis', 20)->nullable();
            $table->string('kodesupel', 50)->nullable()->index('kodesupel2');
            $table->string('kodesales', 50)->nullable();
            $table->string('kodesales2', 50)->nullable();
            $table->string('kodesales3', 50)->nullable();
            $table->string('kodesales4', 50)->nullable();
            $table->string('matauang', 50)->nullable()->index('matauang10');
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->text('keterangan')->nullable();
            $table->decimal('komisi1', 20, 3)->nullable()->default(0);
            $table->decimal('komisi2', 20, 3)->nullable()->default(0);
            $table->decimal('komisi3', 20, 3)->nullable()->default(0);
            $table->decimal('komisi4', 20, 3)->nullable();
            $table->decimal('totalitem', 20, 3)->nullable()->default(0);
            $table->decimal('totalterima', 20, 3)->nullable()->default(0);
            $table->decimal('subtotal', 20, 3)->nullable()->default(0);
            $table->decimal('potfaktur', 25, 10)->nullable()->default(0);
            $table->decimal('pajak', 20, 3)->nullable()->default(0);
            $table->decimal('biayalain', 20, 3)->nullable()->default(0);
            $table->decimal('totalakhir', 20, 3)->nullable()->default(0);
            $table->boolean('biaya_msk_total')->nullable();
            $table->string('user1', 50)->nullable();
            $table->string('user2', 50)->nullable();
            $table->timestamp('dateupd')->nullable();
            $table->decimal('potnomfaktur', 20, 3)->nullable()->default(0);
            $table->decimal('prpajak', 10, 3)->nullable()->default(0);
            $table->decimal('dppesanan', 20, 3)->nullable()->default(0);
            $table->decimal('dppesananbyr', 20, 3)->nullable()->default(0);
            $table->string('acc_dppesanan', 30)->nullable();
            $table->string('acc_dpkas', 30)->nullable();
            $table->string('ppn', 30)->nullable();
            $table->boolean('bc_trf_sts')->nullable()->default(false);
            $table->decimal('prpotfaktur', 25, 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pesanhd');
    }
};
