<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('session_data', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->time('duration');
            $table->date('date');
            $table->integer('activity_id')->unsigned();
            $table->double('distance');
            $table->integer('footsteps');
            $table->integer('calories');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activity_type')->onDelete('cascade');
        });
        DB::statement('ALTER TABLE session_data ADD geometry GEOMETRY');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('session_data');
    }
}
