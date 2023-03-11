<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source_language'); 
            $table->string('target_language');
            $table->string('subject_field');
            $table->string('delivery_date');
            $table->string('delivery_time');
            $table->string('customer_ref');
            $table->string('note');
            $table->string('mobile');
            $table->string('mail_address');
            $table->string('file');
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
        Schema::drop('Quate');
    }
}
