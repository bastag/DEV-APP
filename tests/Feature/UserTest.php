<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testUserIfCustomer(){
      $user = new User;
      $this->assertDatabasetas($user, ['Customers']);
    }

    public function testUserIfAgent(){

    }
}
?>
