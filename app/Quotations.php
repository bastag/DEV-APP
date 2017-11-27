<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
  public function invoices(){
        return $this->hasOne('Apps\Invoices');
    }

  public function paper(){
        return $this->hasMany('Apps\PaperTypes');
    }

  public function offset(){
        return $this->hasMany('Apps\OffsetTypes');
    }

  public function diecutting(){
        return $this->hasMany('Apps\DiecuttingTypes');
    }

  public function lamination(){
        return $this->hasMany('Apps\LaminationTypes');
    }

    public function binding(){
        return $this->hasMany('Apps\BindingTypes');
    }

    public function orders(){
        return $this->belongsTo('Apps\Orders');
    }
}
