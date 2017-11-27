<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layouts extends Model
{
    public function quotations(){
        return $this->belongsTo('Apps\Layouts');
    }
}
