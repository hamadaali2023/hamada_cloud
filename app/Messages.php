<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Messages extends Model
{
     protected $table = 'messages';

    use SoftDeletes;
    protected $dates = ["deleted_at"];

    

   
}
