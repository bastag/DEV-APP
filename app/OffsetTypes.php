<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffsetTypes extends Model
{ 
  public function quotations(){
        return $this->belongsTo('Apps\Quotations');
  }
}
