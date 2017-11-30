<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeType extends Model
{
  public function orders(){
    return $this->belongsTo('Apps\Order');
  }

  public function setName(){
    $this->name;
  }

  public function setDescription(){
    $this->description;
  }
}
