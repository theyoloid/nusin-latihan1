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
        Schema::create('tbl_kaslaci', function (Blueprint $table) {
            $table->string('nama_user', 50);
            $table->string('shift', 10)->nullable();
            $table->decimal('kas_awal', 20, 3)->nullable()->default(0);
            $table->decimal('kas_masuk', 20, 3)->nullable()->default(0);
            $table->decimal('kas_akhir', 20, 3)->nullable()->default(0);
            $table->timestamp('wkt_mulai', 6)->nullable();
            $table->timestamp('wkt_akhir', 6)->nullable();
            $table->boolean('login_flag')->nullable()->default(false);
            $table->decimal('kas_keluar', 20, 3)->nullable();
            $table->string('nama_komputer', 20)->nullable();
            $table->string('notransaksi', 50)->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kaslaci');
    }
};
