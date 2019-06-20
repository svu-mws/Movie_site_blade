<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies_actor extends Model
{
    //
    public function order()
    {
      return $this->belongsTo('App\order');
    }
    public function movies()
    {
      return $this->belongsTo('App\movie');
    }
    public function actors()
    {
      return $this->belongsTo('App\actor');
    }
}
