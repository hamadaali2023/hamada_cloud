<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Ourwork extends Model
{
	protected $table = 'ourwork';


    public function work()
    {
      return $this->hasMany('App\Work','ourwork_id','id'::class);
    }

}
