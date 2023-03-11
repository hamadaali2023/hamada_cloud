<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestpriceTable extends Migration
{
    
    public function up()
    {
        Schema::create('request_price', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('mail');
            $table->string('phone');
            $table->string('majal');
            $table->string('company');
            $table->string('type');
            $table->string('file');
            $table->string('message');        
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('request_price');
    }
}
