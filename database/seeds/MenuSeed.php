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
            'controller'    => 'CMS\SliderController',
            'slug'          => 'slider',
            'order'         => '1'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'About',
            'controller'    => 'CMS\AboutController',
            'slug'          => 'about',
            'order'         => '2'
          ],['index']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Contest',
            'controller'    => 'CMS\ContestController',
            'slug'          => 'contest',
            'order'         => '3'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Day',
            'controller'    => 'CMS\DayController',
            'slug'          => 'day',
            'order'         => '4'
          ],['index','create','update','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Program',
            'controller'    => 'CMS\ProgramController',
            'slug'          => 'program',
            'order'         => '5'
          ],['index','create','update','view','delete']
          );
          \webarq::addMenu([
            'parent_id'     => 'cms',
            'title'         => 'Sponsor',
            'controller'    => 'CMS\SponsorController',
            'slug'          => 'sponsor',
            'order'         => '11'
          ],['index','create','update','delete']
          );
    }
}
