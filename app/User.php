<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //Table Name
    protected $table ='users';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','user_type', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function customers(){
    return $this->hasOne('App\Customer');
    }

    public function agents(){
    return $this->hasOne('App\SalesAgent');

      public function getCustomerID(){
        $customer = $this::where('user_type','=','Customer')->get();
        return $customer::pluck('id');
      }

      public function getAgentID(){
        $agent = $this::where('user_type', '=', 'Sales Agent')->get();
        return $agent::pluck('id');
      }

    }
}
