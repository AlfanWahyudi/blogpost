<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_open_login_page(): void
    {
        $response = $this->get('/sign-in');

        $response->assertStatus(200);
    }

    public function test_login_success_with_remember_me(): void
    {
        $data = [
            'email' => 'alfan@gmail.com',
            'password' => '123',
            'remember' => 'on',
        ];

        $response = $this->post('/sign-in', $data);

        $response->assertValid();
    }

    public function test_logout(): void
    {
        $response = $this->post(route('logout'));

        $response->assertValid();
    }

    public function test_login_failed(): void
    {
        $data = [
            'email' => 'alfan@gl.com',
            'password' => '123',
        ];

        $response = $this->post('/sign-in', $data);

        $response->assertInvalid(['email']);
    }

    public function test_validation_email_empty(): void
    {
        $data = [
            'email' => '',
            'password' => 'fddfddf',
        ];

        $response = $this->post('/sign-in', $data);

        $response->assertInvalid(['email']);
    }

    public function test_validation_email_wrong_format(): void
    {
        $data = [
            'email' => 'dfdsafadsf',
            'password' => 'fddfddf',
        ];

        $response = $this->post('/sign-in', $data);

        $response->assertInvalid(['email']);
    }

    public function test_validation_password_empty(): void
    {
        $data = [
            'email' => 'test@gmail.com',
            'password' => '',
        ];

        $response = $this->post('/sign-in', $data);

        $response->assertInvalid(['password']);
    }
}
