<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('device_id');
            $table->float('current', 5, 3);
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->foreign('device_id')->references('device_id')->on('devices')->onDelete('cascade');
;

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('devices');
    }
}
