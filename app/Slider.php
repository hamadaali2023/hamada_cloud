<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Slider extends Model
{
     protected $table = 'slider';
      use SoftDeletes;
      protected $dates = ["deleted_at"];
}
