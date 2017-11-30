<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaminationType extends Model
{
  public function quotations(){
        return $this->belongsTo('Apps\Quotation');
    }

    public function setName(){
      $this->name;
    }

    public function setDescription(){
      $this->description;
    }
}
