<?php

use Illuminate\Database\Seeder;

class VenueSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Delete
      DB::table('venues')->delete();
      //insert some dummy records
      DB::table('venues')->insert(array(
          array(
            'id'=>1,
            'place'=>'',
            'description'=>'',
            'address'=>'',
            'image'=>''
          ),
       ));
    }
}
