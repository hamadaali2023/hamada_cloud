<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Quate extends Model
{
	protected $table = 'quatation';
     use SoftDeletes;
      protected $dates = ["deleted_at"];
      
}
