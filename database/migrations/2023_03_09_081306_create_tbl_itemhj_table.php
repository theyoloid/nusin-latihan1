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
        Schema::create('tbl_itemhj', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->string('kodeitem', 100)->nullable()->index('kodeitem7');
            $table->string('tipehj', 10)->nullable();
            $table->decimal('jmlsampai', 20, 3)->nullable()->default(0);
            $table->integer('level')->nullable()->default(0);
            $table->decimal('prosentase', 20, 3)->nullable()->default(0);
            $table->string('satuan', 50)->nullable();
            $table->decimal('hargajual', 35, 20)->nullable()->default(0);
            $table->timestamp('dateupd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemhj');
    }
};
