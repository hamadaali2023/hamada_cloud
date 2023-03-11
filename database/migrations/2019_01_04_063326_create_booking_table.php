<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatebookingTable extends Migration
{
   
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('mail');            
            $table->string('message');        
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::drop('booking');
    }
}
