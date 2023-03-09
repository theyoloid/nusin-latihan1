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
        Schema::create('tbl_kaslacidt', function (Blueprint $table) {
            $table->string('notransaksi', 50);
            $table->string('nama_pengambil', 50)->nullable();
            $table->decimal('kas_keluar', 20, 3)->nullable();
            $table->string('keterangan_p', 100)->nullable();
            $table->string('iddetail', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kaslacidt');
    }
};
