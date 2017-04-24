<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('devices', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('device_id');
            $table->string('name')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('device_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
