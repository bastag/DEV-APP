<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderJobType extends Model
{
  public function orders()
  {
    return $this->belongsTo('Apps\Order');
  }

  public function jobtypes()
  {
    return $this->hasMany('Apps\JobType');
  }

  public function setRemarks(){
    $this->remarks;
  }
}
