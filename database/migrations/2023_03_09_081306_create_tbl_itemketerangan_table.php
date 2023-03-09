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
        Schema::create('tbl_itemketerangan', function (Blueprint $table) {
            $table->string('kodeket', 50);
            $table->string('keterangan', 300)->nullable();
            $table->string('jenisket', 50);

            $table->primary(['kodeket', 'jenisket']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_itemketerangan');
    }
};
