<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
  public function Package()
  {
      return $this->belongsToMany('App\Package');
  }
}
