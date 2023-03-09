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
        Schema::create('tbl_accjurnal', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->integer('nourut')->nullable();
            $table->string('tipeinput', 5)->nullable();
            $table->string('notransaksi', 100)->nullable()->index('tbl_accjurnal_notrs');
            $table->timestamp('tanggal')->nullable();
            $table->string('kodeacc', 30)->nullable();
            $table->string('jenis', 20)->nullable();
            $table->text('keterangan')->nullable();
            $table->string('matauang', 50)->nullable();
            $table->decimal('rate', 35, 20)->nullable()->default(0);
            $table->decimal('jumlah', 35, 20)->nullable()->default(0);
            $table->string('posisi', 5)->nullable();
            $table->decimal('debet', 35, 20)->nullable()->default(0);
            $table->decimal('kredit', 35, 20)->nullable()->default(0);
            $table->string('kantor', 50)->nullable();
            $table->string('modul', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_accjurnal');
    }
};
