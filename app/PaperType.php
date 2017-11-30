<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperType extends Model
{
  public function quotations(){
        return $this->belongsTo('Apps\Quotation');
    }

    public function orders(){
        return $this->belongsTo('Apps\Order');
    }

    public function setType(){
      $this->type;
    }

    public function setColor(){
      $this->color;
    }

    public function setDescription(){
      $this->description;
    }

    public function setPrice(){
      $this->price;
    }
}
