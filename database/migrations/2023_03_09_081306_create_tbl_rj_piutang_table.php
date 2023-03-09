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
        Schema::create('tbl_rj_piutang', function (Blueprint $table) {
            $table->string('noretur', 50)->nullable()->index('noretur1');
            $table->string('notrspot', 50)->nullable()->index('notrs1');
            $table->decimal('jmlpot', 20, 3)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_rj_piutang');
    }
};
