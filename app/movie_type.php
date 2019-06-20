<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie_type extends Model
{

  protected $table = 'movie_types';
    //
    public function types()
    {
      return $this->belongsTo('App\type');
    }
    public function movies()
    {
      return $this->belongsTo('App\movie');
    }
}
