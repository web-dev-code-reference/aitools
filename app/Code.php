<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    //
    public function codetype() {
		  return $this->belongsTo('App\Codetype');
    } 
}
