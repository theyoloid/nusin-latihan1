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
        Schema::create('tbl_point_sa', function (Blueprint $table) {
            $table->string('kodesupel', 50);
            $table->string('kodekantor', 50)->nullable();
            $table->string('notransaksi', 50)->nullable();
            $table->timestamp('tanggal')->nullable();
            $table->string('tipe', 20)->nullable();
            $table->decimal('point_ik', 20, 3)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_point_sa');
    }
};
