<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class  Requestprice extends Model
{
	protected $table = 'price';
     use SoftDeletes;
      protected $dates = ["deleted_at"];

}
