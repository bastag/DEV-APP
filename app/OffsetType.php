<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffsetType extends Model
{
  public function quotations(){
        return $this->belongsTo('Apps\Quotation');
  }

  public function setType(){
    this->type;
  }

  public function setDescription(){
    this->description;
  }

  public function setPrice(){
    this->price;
  }
  
}
