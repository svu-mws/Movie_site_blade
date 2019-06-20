<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $table = 'typess';
  public function order()
  {
    return $this->hasMany('App\movie_type','type_id');
  }

    //
}
