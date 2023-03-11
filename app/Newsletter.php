<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Newsletter extends Model
{
     protected $table = 'newsletter';

    use SoftDeletes;
    protected $dates = ["deleted_at"];   
}
