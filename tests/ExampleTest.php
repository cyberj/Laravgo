<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use laravgo\Contact;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    public function testContactCreate()
    {
      $c1 = Contact::create(array(
        'first_name'         => 'Dave',
        'last_name'         => 'Null',
      ));
      $contacts = Contact::all();
      // print_r($contacts);
      $this->assertEquals(count($contacts), 1);
    }
}
