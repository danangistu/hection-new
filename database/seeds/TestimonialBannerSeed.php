<?php

use Illuminate\Database\Seeder;

class TestimonialBannerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Delete
      DB::table('testimonial_banners')->delete();
      //insert some dummy records
      DB::table('testimonial_banners')->insert(array(
          array(
            'id'=>1,
            'image'=>''
          ),
       ));
    }
}
