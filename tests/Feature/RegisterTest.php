<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_show_register_page(): void
    {
        $response = $this->get('/sign-up');

        $response->assertStatus(200);
    }

    /**
     * test data berhasil disimpan
     *
     */
    public function test_store_register_data(): void
    {
        $data = [
            'name' => 'User Test',
            'email' => 'usertest@test.com',
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ];
        $response = $this->post('/sign-up', $data);

        $response->assertValid();
        $response->assertRedirectToRoute('signin');
    }


    /**
      * test validasi input semua data kosong
      */
    public function test_validation_input_all_data_empty(): void
    {
        $data = [
            'name' => '',
            'email' => '',
            'password' => '',
        ];
        $response = $this->post('/sign-up', $data);

        $response->assertInvalid(['name', 'email', 'password']);
    }


    /**
     * test validasi input nama kosong
     */
    public function test_validation_input_name_empty(): void
    {
        $data = [
            'name' => '',
            'email' => 'ml@gmail.com',
            'password' => '12345678',
        ];

        $response = $this->post('/sign-up', $data);

        $response->assertInvalid([
            'name' => 'The name field is required.'
        ]);
    }


    /**
     * test validasi input email kosong
     */
    public function test_validation_input_email_empty(): void
    {
        $data = [
            'name' => 'user',
            'email' => '',
            'password' => '12345678',
        ];

        $response = $this->post('/sign-up', $data);

        $response->assertInvalid([
            'email' => 'The email field is required.'
        ]);
    }


    /**
     * test validasi input email yang sudah ada
     */
    public function test_validation_input_email_not_unique(): void
    {
        $data = [
            'name' => 'alfan',
            'email' => 'alfan@gmail.com',
            'password' => '12345678',
        ];

        $response = $this->post('/sign-up', $data);

        $response->assertInvalid(['email']);
    }


    /**
     * test validasi input email dengan format salah
     */
    public function test_validation_input_email_wrong_format(): void
    {
        $data = [
            'name' => 'alfan',
            'email' => 'alfan',
            'password' => '12345678',
        ];

        $response = $this->post('/sign-up', $data);

        $response->assertInvalid(['email']);
    }


    /**
     * test validasi input password kosong
     */
    public function test_validation_input_password_empty(): void
    {
        $data = [
            'name' => 'user',
            'email' => 'us@gmail.com',
            'password' => '',
        ];

        $response = $this->post('/sign-up', $data);

        $response->assertInvalid([
            'password' => 'The password field is required.'
        ]);
    }


    /**
     * test validasi input password kurang dari 8 karakter
     */
    public function test_validation_input_password_less_than_8_length(): void
    {
        $data = [
            'name' => 'user',
            'email' => 'us@gmail.com',
            'password' => '1333',
        ];

        $response = $this->post('/sign-up', $data);

        $response->assertInvalid(['password']);
    }


    /**
     * test validasi input confirm password yang berbeda dengan password
     */
    public function test_validation_input_confirm_password_dont_match_to_password(): void
    {
        $data = [
            'name' => 'user',
            'email' => 'us@gmail.com',
            'password' => '88888888',
            'password_confirmation' => '1980878798'
        ];

        $response = $this->post('/sign-up', $data);

        $response->assertInvalid(['password']);
    }
}
