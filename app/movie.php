<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    //
    public  function comments()
    {
      return $this->hasMany('App\comment');
    }
    public  function types()
    {
      return $this->hasMany('App\movie_type');
    }
    public  function rates()
    {
      return $this->hasMany('App\Movie_rate');
    }
    public  function movies_actors()
    {
      return $this->hasMany('App\movies_actor');
    }
    public  function produers()
    {
      return $this->belongsTo('App\prodcer');
    }

}
