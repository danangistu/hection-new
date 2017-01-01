<?php

use Illuminate\Database\Seeder;

class ConfigSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Delete
      DB::table('configs')->delete();
      //insert some dummy records
      DB::table('configs')->insert(array(
          array(
            'id'=>1,
            'image'=>'',
            'email'=>'',
            'facebook'=>'',
            'twitter'=>'',
            'instagram'=>'',
          ),
       ));
    }
}
