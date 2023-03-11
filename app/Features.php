<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Features extends Model
{
     protected $table = 'feature';

    use SoftDeletes;
    protected $dates = ["deleted_at"];

    

    public function services(){
           return $this->belongsTo(Services::class);
    }
}
