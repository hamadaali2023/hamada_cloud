<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Contactus extends Model
{
	 protected $table = 'contactus';
     use SoftDeletes;
      protected $dates = ["deleted_at"];

}
