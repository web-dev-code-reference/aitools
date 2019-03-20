<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Code;

class Codetype extends Model
{
    //
    public function codes(){
        return $this->hasMany('App\Code');
    }
}
