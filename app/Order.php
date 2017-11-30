<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable =
  [
    'job_name','job_type','quantity','page_count','cover_paper_type','inside_paper_type','size_type_id'
    ,'lamination_type_id','binding_type_id','cover_isColored','inside_isColored','date_due'
  ];
    public function customers(){
        return $this->belongsTo('Apps\Customer');
    }

    public function agents(){
        return $this->belongsTo('Apps\SalesAgent');
    }

    public function quotations(){
        return $this->hasMany('Apps\Quotation');
    }

    public function invoices(){
        return $this->hasOne('Apps\Invoice');
    }

  public function paper(){
        return $this->hasMany('Apps\PaperType');
    }

  public function offset(){
        return $this->hasMany('Apps\OffsetType');
    }

  public function diecutting(){
        return $this->hasMany('Apps\DiecuttingType');
    }

  public function lamination(){
        return $this->hasMany('Apps\LaminationType');
    }

    public function binding(){
        return $this->hasMany('Apps\BindingType');
    }

    public function jobtype(){
        return $this->hasMany('Apps\JobType');
    }

}
