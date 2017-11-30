<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function testBasicTest()
    {
      $this->assertTrue(User::getCustomerID);
    }*/

    public function testUserDemography(){
      $user = new \App\User;


      $user::where('first_name', '=', "Emmanuel");
      $this->assertEquals($user::all(), $user::where('first_name','=','Emmanuel'));
    }
}

?>
