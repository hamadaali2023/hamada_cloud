<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 190);
            $table->string('check')->default(0); 
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('details');
    }
}
