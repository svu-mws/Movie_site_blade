<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producer extends Model
{
    //
    public function movies()
    {
      return $this->hasMany('App\movie','movie_id');
    }
}
