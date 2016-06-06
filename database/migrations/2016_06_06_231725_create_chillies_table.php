<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChilliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chillies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('species');
            $table->string('origin');
            $table->integer('heat');
            $table->integer('scoville');
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
        Schema::drop('chillies');
    }
}
