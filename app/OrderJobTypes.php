<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderJobTypes extends Model
{
  public function orders(){
    return $this->belongsTo('Apps\Orders');
  }

  public function jobtypes(){
    return $this->hasMany('Apps\JobTypes');
  }
}
