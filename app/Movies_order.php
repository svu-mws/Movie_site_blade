<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies_order extends Model
{
    protected $table = 'movies_orders';
    //7
    public function order()
    {
      return $this->belongsTo('App\order');
    }
    public function movies()
    {
      return $this->belongsTo('App\movies');
    }
}
