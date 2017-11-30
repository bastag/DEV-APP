<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesAgent extends Model
{

  protected $fillable = [
    'employee_id'
  ];

  public function users(){
        return $this->belongsTo('Apps\User');
    }

    public function orders(){
    return $this->hasMany('Apps\Order');
  }

  public function setEmployeeID(){
    $this->employee_id;
  }
}
