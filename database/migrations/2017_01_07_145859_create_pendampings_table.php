<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendampingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendampings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('gender',['L','P'])->default('L');
            $table->string('nip');
            $table->string('hp');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('jabatan');
            $table->string('uk');
            $table->text('alamat_uk');
            $table->text('alamat_rumah');
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
        Schema::drop('pendampings');
    }
}
