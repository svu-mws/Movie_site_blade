<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fav_producer extends Model
{
    //
    public function producer()
    {
      return $this->belongsTo('App\Producer');
    }
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
