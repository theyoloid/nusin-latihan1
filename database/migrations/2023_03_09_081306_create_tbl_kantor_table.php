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
        Schema::create('tbl_kantor', function (Blueprint $table) {
            $table->string('kodekantor', 50)->primary();
            $table->string('fungsi', 20)->nullable();
            $table->string('namakantor', 200)->nullable();
            $table->text('alamat')->nullable();
            $table->string('notelepon', 150)->nullable();
            $table->string('fax', 150)->nullable();
            $table->boolean('cabang')->nullable()->default(false);
            $table->string('kodeacc', 30)->nullable();
            $table->boolean('mobile')->nullable()->default(false);
            $table->boolean('stspakai')->nullable()->default(false);
            $table->decimal('nompajak', 20, 3)->nullable()->default(0);
            $table->string('stsaktif', 15)->nullable()->default('Y');
            $table->string('whatsapp', 20)->nullable();
            $table->string('email', 100)->nullable();

            $table->index(['kodekantor'], 'kodekantor10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kantor');
    }
};
