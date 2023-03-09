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
        Schema::create('tbl_request_upload_queue', function (Blueprint $table) {
            $table->string('idupload', 100)->primary();
            $table->timestamp('entry_date')->nullable();
            $table->string('modul_type', 50)->nullable();
            $table->string('modul_key_value')->nullable();
            $table->string('modul_key_oldvalue')->nullable();
            $table->string('save_type', 50)->nullable();
            $table->integer('flag_upload')->nullable();
            $table->string('ret_id', 20)->nullable();
            $table->text('ret_msg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_request_upload_queue');
    }
};
