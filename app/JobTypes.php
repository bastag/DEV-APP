<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTypes extends Model
{
    public function orderjobtypes(){
        return $this->belongsTo('Apps\OrderJobTypes');
    }
}
