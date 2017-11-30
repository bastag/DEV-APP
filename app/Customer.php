<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Customer extends Model
{
  protected $fillable = [
      'affiliation'
  ];

  public function users(){
        return $this->belongsTo('Apps\User');
    }

  public function orders(){
    return $this->hasMany('Apps\Order');

    public function storeCustomer(User $users, Request $request){
      $id = $users::where('user_type','=','customers');

      $this->user_id = $id::pluck('');

      $this->user_id = $users
    }
  }
}
