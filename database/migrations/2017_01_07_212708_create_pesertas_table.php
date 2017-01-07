<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pendamping_id')->unsigned();
            $table->integer('team');
            $table->string('category');
            $table->string('name');
            $table->string('email');
            $table->string('hp');
            $table->enum('gender',['L','P'])->default('L');
            $table->text('address');
            $table->string('postal_code');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('jurusan');
            $table->text('sch_address');
            $table->string('photo');
            $table->string('id_card');
            $table->string('slip');
            $table->enum('status',['y','n'])->default('n');
            $table->string('verification_code');
            $table->timestamps();

            $table->foreign('pendamping_id')->references('id')->on('pendampings')
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
        Schema::drop('pesertas');
    }
}
