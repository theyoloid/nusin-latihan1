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
        Schema::create('tbl_supel', function (Blueprint $table) {
            $table->string('kode', 50)->index('kode');
            $table->string('tipe', 2);
            $table->string('nama', 150)->nullable();
            $table->text('alamat')->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('kodepos', 20)->nullable();
            $table->string('negara', 100)->nullable();
            $table->string('telepon', 200)->nullable();
            $table->string('fax', 200)->nullable();
            $table->string('kontak', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('matauang', 50)->nullable()->index('tbl_supplier_fk_mu1');
            $table->string('norek', 100)->nullable();
            $table->string('atasnama', 100)->nullable();
            $table->string('bank', 100)->nullable();
            $table->text('keterangan')->nullable();
            $table->decimal('limitjmlhupi', 20, 3)->nullable()->default(0);
            $table->integer('limitharihupi')->nullable()->default(0);
            $table->string('tipepot', 5)->nullable();
            $table->string('kgrup', 20)->nullable();
            $table->integer('pilkomisi')->nullable()->default(1);
            $table->integer('piljmlkomisi')->nullable()->default(1);
            $table->decimal('komisipr', 20, 3)->nullable()->default(0);
            $table->decimal('komisinom', 20, 3)->nullable()->default(0);
            $table->string('npwp', 100)->nullable();
            $table->integer('harijt')->nullable()->default(0);
            $table->string('kdwilayah', 50)->nullable();
            $table->string('kdsubwil', 50)->nullable();
            $table->string('kdsales', 50)->nullable();
            $table->decimal('maxjmlkredit', 20, 3)->nullable()->default(0);
            $table->string('syspajak', 10)->nullable();
            $table->string('opsyspajak', 10)->nullable();
            $table->decimal('nompajak', 20, 3)->nullable();
            $table->string('nik', 50)->nullable();
            $table->string('nama_npwp', 150)->nullable();
            $table->text('alamat_npwp')->nullable();
            $table->timestamp('tgl_lahir')->nullable();
            $table->string('opsikredit', 5)->nullable()->default('Y');
            $table->string('acc_kredit', 30)->nullable();
            $table->string('stsaktif', 15)->nullable()->default('Y');

            $table->unique(['kode'], 'tbl_supel_kode_key');
            $table->primary(['kode', 'tipe']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_supel');
    }
};
