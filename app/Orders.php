<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function customers(){
        return $this->belongsTo('Apps\Customers');
    }

    public function agents(){
        return $this->belongsTo('Apps\SalesAgents');
    }

    public function quotations(){
        return $this->hasMany('Apps\Quotations');
    }

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

    public function jobtype(){
        return $this->hasMany('Apps\JobTypes');    }
}
