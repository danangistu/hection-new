<?php

use Illuminate\Database\Seeder;


class MenuSeed extends Seeder
{
    public function run()
    {
      //Content Management
      \webarq::addMenu([
        'parent_id'     => null,
        'title'         => 'Management Contents',
        'controller'    => '#',
        'slug'          => 'cms',
        'order'         => 1,
      ],[]);
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Slider',
            'controller'    => 'SliderController',
            'slug'          => 'slider',
            'order'         => '1'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'About',
            'controller'    => 'AboutController',
            'slug'          => 'about',
            'order'         => '2'
          ],['index']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Contest',
            'controller'    => 'ContestController',
            'slug'          => 'contest',
            'order'         => '3'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Day',
            'controller'    => 'DayController',
            'slug'          => 'day',
            'order'         => '4'
          ],['index','create','update','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Program',
            'controller'    => 'ProgramController',
            'slug'          => 'program',
            'order'         => '5'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Gallery',
            'controller'    => 'GalleryController',
            'slug'          => 'gallery',
            'order'         => '6'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Winner',
            'controller'    => 'WinnerController',
            'slug'          => 'winner',
            'order'         => '7'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Prize',
            'controller'    => 'PrizeController',
            'slug'          => 'prize',
            'order'         => '8'
          ],['index']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Venue',
            'controller'    => 'VenueController',
            'slug'          => 'venue',
            'order'         => '9'
          ],['index']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Testimonial',
            'controller'    => 'TestimonialController',
            'slug'          => 'testimonial',
            'order'         => '10'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Testimonial Banner',
            'controller'    => 'TestimonialBannerController',
            'slug'          => 'testimonialbanner',
            'order'         => '11'
          ],['index']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Sponsor',
            'controller'    => 'SponsorController',
            'slug'          => 'sponsor',
            'order'         => '12'
          ],['index','create','update','delete']
          );

      //Content Management
      \webarq::addMenu([
        'parent_id'     => null,
        'title'         => 'Settings',
        'controller'    => '#',
        'slug'          => 'settings',
        'order'         => 10,
      ],[]);
          \webarq::addMenu([
            'parent_id'     => 'settings',
            'title'         => 'Global Config',
            'controller'    => 'ConfigController',
            'slug'          => 'config',
            'order'         => '1'
          ],['index']
          );
          \webarq::addMenu([
            'parent_id'     => 'settings',
            'title'         => 'Additional File',
            'controller'    => 'AddFileController',
            'slug'          => 'addfile',
            'order'         => '2'
          ],['index','create','update','delete']
          );
    }
}
