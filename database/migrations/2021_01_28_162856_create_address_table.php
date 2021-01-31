<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
             $table->foreign('user_id')
        ->references('id')
        ->on('users');
            $table->integer('Index_addr');
            $table->string('Country');
            $table->string('City');
            $table->string('Street');
            $table->integer('Housenum');
            $table->integer('Officenum')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
