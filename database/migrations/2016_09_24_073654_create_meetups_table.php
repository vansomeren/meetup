<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('date');
            $table->string('location');
            $table->text('description');
            $table->unsignedInteger('owner_id')->index()->nullable();
            $table->foreign('owner_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
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
        Schema::drop('meetups');
    }
}
