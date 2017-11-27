<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesAgents extends Model
{
  public function users(){
        return $this->belongsTo('Apps\Users');
    }
    
    public function orders(){
    return $this->hasMany('Apps\Orders');
  }
}
