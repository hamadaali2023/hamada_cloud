<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Services extends Model
{
		 protected $table = 'services';
      use SoftDeletes;
      protected $dates = ["deleted_at"];

       public function minservices()
    {
      return $this->hasMany('App\MinServices','services_id','id'::class)->withTrashed();
    }

     public function features()
    {
      return $this->hasMany('App\Features','services_id','id'::class)->withTrashed();
    }

}
