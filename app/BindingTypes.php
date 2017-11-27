<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BindingTypes extends Model
{
    public function quotations(){
        return $this->belongsTo('Apps\Quotations');
    }

    public function orders(){
        return $this->belongsTo('Apps\Orders');
    }
}
