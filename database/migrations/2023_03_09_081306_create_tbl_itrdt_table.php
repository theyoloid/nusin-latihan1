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
        Schema::create('tbl_itrdt', function (Blueprint $table) {
            $table->string('iddetail', 150)->primary();
            $table->integer('nobaris')->nullable()->default(0);
            $table->string('notransaksi', 50)->nullable()->index('notransaksi5');
            $table->string('kodeitem', 100)->nullable()->index('kodeitem12');
            $table->decimal('jumlah', 20, 3)->nullable()->default(0);
            $table->string('satuan', 50)->nullable()->index('satuan4');
            $table->timestamp('dateupd')->nullable();
            $table->text('detinfo')->nullable();
            $table->decimal('jmlkonversi', 20, 3)->nullable()->default(0);
            $table->decimal('hppdasar', 35, 20)->nullable()->default(0);
            $table->timestamp('tglexp', 6)->nullable();
            $table->string('kodeprod', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itrdt');
    }
};
