<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->boolean('allDay')->default(false);
            $table->boolean('publish')->default(true);
            $table->string('color')->nullable();//keep positive
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->string('url')->nullable();
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
        //
        Schema::drop('calendars');
    }
}
