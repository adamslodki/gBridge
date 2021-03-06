<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_type', function (Blueprint $table) {
            $table->increments('devicetype_id');
            $table->string('shortname', 16)->nullable(false);
            $table->string('gname', 64)->nullable(false);
            $table->string('description', 128)->nullable(false);
            $table->string('name', 32)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_type');
    }
}
