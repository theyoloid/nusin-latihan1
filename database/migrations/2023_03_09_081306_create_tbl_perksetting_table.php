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
        Schema::create('tbl_perksetting', function (Blueprint $table) {
            $table->string('accsetting', 50);
            $table->string('kodeacc', 30)->nullable();
            $table->string('acckantor', 50);

            $table->primary(['acckantor', 'accsetting']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_perksetting');
    }
};
