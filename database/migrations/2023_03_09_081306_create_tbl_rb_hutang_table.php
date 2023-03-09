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
        Schema::create('tbl_rb_hutang', function (Blueprint $table) {
            $table->string('noretur', 50)->nullable()->index('noretur');
            $table->string('notrspot', 50)->nullable()->index('notrs');
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
        Schema::dropIfExists('tbl_rb_hutang');
    }
};
