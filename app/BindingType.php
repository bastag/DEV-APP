<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BindingType extends Model
{
    public function quotations(){
        return $this->belongsTo('Apps\Quotations');
    }

    public function orders(){
        return $this->belongsTo('Apps\Orders');
    }

    public function setName(){
      $this->name;
    }

    public function getName(){

    }

    public function setDescription(){
      this->description;
    }

    public function setPrice(){
      this->price;
    }
}
