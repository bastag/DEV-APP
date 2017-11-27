<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function true_should_be_true()
    {
        $this->assertTrue(true);
    }
    //'name', 'email', 'password',
}
