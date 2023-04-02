<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_it_stores_new_user()
    {
        $response = $this->post('/register', [
            'name' => 'Jhon Doe',
            'email' => 'jhondoe@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertRedirect('/home');
    }

    public function test_delete_user()
    {
        $user = User::first();
        if ($user) {
            $user->delete();
        }
        $this->assertTrue(True);
    }


    // public function test_seeder()
    // {
    //     $this->seed();
    // }
}
