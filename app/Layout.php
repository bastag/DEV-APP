<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    public function quotations(){
        return $this->belongsTo('Apps\Layout');
    }
}
