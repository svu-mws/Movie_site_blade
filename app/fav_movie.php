<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fav_movie extends Model
{
    //
    protected $table = 'favmovies';
    public function movie()
    {
      return $this->belongsTo('App\movie');
    }
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
