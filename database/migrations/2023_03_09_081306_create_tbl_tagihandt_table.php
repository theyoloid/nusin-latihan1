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
        Schema::create('tbl_tagihandt', function (Blueprint $table) {
            $table->string('iddetail', 100)->nullable();
            $table->string('notransaksi', 200)->nullable();
            $table->decimal('jumlah', 20, 3)->nullable();
            $table->string('idko_dt', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tagihandt');
    }
};
