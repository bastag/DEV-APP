<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeTypes extends Model
{
  public function orders(){
    return $this->belongsTo('Apps\Orders');
  }
}
