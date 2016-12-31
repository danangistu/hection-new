<?php

use Illuminate\Database\Seeder;

class PrizeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Delete
      DB::table('prizes')->delete();
      //insert some dummy records
      DB::table('prizes')->insert(array(
          array(
            'id'=>1,
            'title'=>'',
            'description'=>'',
            'image'=>''
          ),
       ));
    }
}
