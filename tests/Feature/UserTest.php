<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** ->count(50)
     * A basic feature test example.
     *
     * @return void ->count(50)
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUsersAreCreatedSuccessfully()
    { 
        $token = null;

        $payload = User::factory()->count(300)->create();
    }
}
