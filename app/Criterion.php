<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
  protected $table = 'criteria';
    //
  
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
