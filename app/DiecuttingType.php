<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiecuttingType extends Model
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

    public function setPrice(){
      $this->price;
    }
}
