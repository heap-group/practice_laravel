<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Person;

class HelloTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {

        //ダミーデータ
        factory(User::class)->create([
           'name' => 'AAA',
           'email' => 'BBB@gmail.com',
           'password' => 'hogehoge'
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@gmail.com',
            'password' => 'hogehoge'
        ]);

        //ダミーデータ
        factory(Person::class)->create([
            'name' => 'CCC',
            'mail' => 'BBA@gmail.com',
            'age' => 100
        ]);
        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'CCC',
            'mail' => 'BBA@gmail.com',
            'age' => 100
        ]);

    }
}
