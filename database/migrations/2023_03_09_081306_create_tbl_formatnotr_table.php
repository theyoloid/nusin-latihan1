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
        Schema::create('tbl_formatnotr', function (Blueprint $table) {
            $table->string('trid', 10);
            $table->bigInteger('nomor')->nullable()->default(0);
            $table->string('slot1', 10)->nullable();
            $table->string('slot2', 10)->nullable();
            $table->string('slot3', 10)->nullable();
            $table->string('slot4', 10)->nullable();
            $table->string('slot5', 10)->nullable();
            $table->string('sep1', 2)->nullable();
            $table->string('sep2', 2)->nullable();
            $table->string('sep3', 2)->nullable();
            $table->string('sep4', 2)->nullable();
            $table->string('resetid', 10)->nullable();
            $table->integer('numdgt')->nullable()->default(0);
            $table->string('notransaksi', 50)->nullable();
            $table->string('kantor', 50);
            $table->timestamp('lastgen')->nullable();

            $table->primary(['trid', 'kantor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_formatnotr');
    }
};
