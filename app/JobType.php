<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    public function orderjobtypes(){
        return $this->belongsTo('Apps\OrderJobType');
    }
}
