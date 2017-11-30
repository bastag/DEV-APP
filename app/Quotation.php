<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
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

    public function orders(){
        return $this->belongsTo('Apps\Order');
    }
    public function computeQuotation()
    {
    //$cover_stock_price + $inside_stock_price + $cover_offset_price + $inside_offset_price + $lamination_price +
    //$letterpress_price + $binding_price + $diecut_price = $unit_price
    //$total_price == $unit_price * $qty

    }
}
