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
        Schema::create('tbl_itempromodt', function (Blueprint $table) {
            $table->string('kodeitem', 100)->nullable();
            $table->decimal('jumlahjual', 20, 3)->nullable();
            $table->string('satuanjual', 50)->nullable();
            $table->decimal('jumlahgratis', 20, 3)->nullable();
            $table->string('satuangratis', 50)->nullable();
            $table->string('idpromo', 50)->nullable();
            $table->string('kodeitemgr', 100)->nullable();
            $table->boolean('kelipatan')->nullable()->default(true);
            $table->boolean('tebus')->nullable()->default(false);
            $table->decimal('harga', 20, 3)->nullable()->default(0);
            $table->string('opsigratis', 50)->nullable()->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itempromodt');
    }
};
