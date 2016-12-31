<?php

use Illuminate\Database\Seeder;


class MenuSeed extends Seeder
{
    /* example add menu
        \webarq::addMenu([
                'parent_id'     => null,
                'title'         => 'Management product',
                'controller'    => '#',
                'slug'          => 'product',
                'order'         => 1,
            ],[]);

                \webarq::addMenu([
                    'parent_id'     => 'product',
                    'title'         => 'Category',
                    'controller'    => 'CategoryController',
                    'slug'          => 'category',
                    'order'         => '1'
                ],['index','create','update','delete']
            );

    */



    public function run()
    {
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
    }
}
