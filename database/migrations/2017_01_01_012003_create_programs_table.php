<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('day_id')->unsigned();
          $table->string('time');
          $table->string('program');
          $table->text('description');
          $table->integer('duration');
          $table->string('place');
          $table->timestamps();

          $table->foreign('day_id')->references('id')->on('days')
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programs');
    }
}
