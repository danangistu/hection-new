<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Contest extends Model
{
    use Sluggable;
    public $guarded = [];
    public function sluggable()
    {
      return [
        'slug' => [
            'source' => 'title'
        ]
      ];
    }
}
