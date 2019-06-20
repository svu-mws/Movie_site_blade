<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fav_actor extends Model
{
    //
    public function actor()
    {
      return $this->belongsTo('App\actor');
    }
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
