<?php

use Illuminate\Database\Seeder;

class AboutSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Delete
      DB::table('abouts')->delete();
      //insert some dummy records
      DB::table('abouts')->insert(array(
          array(
            'id'=>1,
            'title'=>'',
            'about'=>'',
            'pur_1'=>'',
            'pur_text_1'=>'',
            'pur_2'=>'',
            'pur_text_2'=>'',
            'pur_3'=>'',
            'pur_text_3'=>'',
            'pur_4'=>'',
            'pur_text_4'=>''
          ),
       ));
    }
}
