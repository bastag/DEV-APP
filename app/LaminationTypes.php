<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaminationTypes extends Model
{
  public function quotations(){
        return $this->belongsTo('Apps\Quotations');
    }
}
