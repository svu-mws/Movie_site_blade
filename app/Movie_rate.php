<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie_rate extends Model
{
    protected $table = 'rates';
    //
    public  function movie()
    {
      return $this->belongsTo('App\movie');
    }
}
