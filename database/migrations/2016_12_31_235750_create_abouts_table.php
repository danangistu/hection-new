<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->text('about');
          $table->string('pur_1');
          $table->text('pur_text_1');
          $table->string('pur_2');
          $table->text('pur_text_2');
          $table->string('pur_3');
          $table->text('pur_text_3');
          $table->string('pur_4');
          $table->text('pur_text_4');
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
        Schema::drop('abouts');
    }
}
