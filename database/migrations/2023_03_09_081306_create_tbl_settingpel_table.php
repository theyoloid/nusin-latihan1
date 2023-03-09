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
        Schema::create('tbl_settingpel', function (Blueprint $table) {
            $table->integer('ptipe')->nullable()->default(1);
            $table->decimal('pkelipatan', 20, 3)->nullable()->default(0);
            $table->decimal('pnilaitukar', 20, 3)->nullable()->default(0);
            $table->timestamp('pmasadari')->nullable();
            $table->timestamp('pmasasampai')->nullable();
            $table->timestamp('pmtukardari')->nullable();
            $table->timestamp('pmtukarsampai')->nullable();
            $table->integer('ppotberlaku')->nullable()->default(0);
            $table->string('mnote1')->nullable();
            $table->string('mnote2')->nullable();
            $table->boolean('pumumnopoin')->nullable()->default(false);
            $table->timestamp('pmdapatdari')->nullable();
            $table->timestamp('pmdapatsampai')->nullable();
            $table->string('mnote3')->nullable();
            $table->boolean('ppointopot')->nullable()->default(false);
            $table->string('mnote4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_settingpel');
    }
};
