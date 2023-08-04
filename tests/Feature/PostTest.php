<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_open_posts_page(): void
    {
        $login = [
            'email' => 'alfan@gmail.com',
            'password' => '123',
            'remember' => null,
        ];

        $responseLogin = $this->post('/sign-in', $login);
        $responseLogin->assertValid();

        $response = $this->get(route('dashboard.post.index'));
        $response->assertStatus(200);

        $response->assertViewHasAll([
            'posts',
        ]);
    }

    public function test_open_posts_page_with_empty_data(): void
    {
        $login = [
            'email' => 'user2@gmail.com',
            'password' => '123',
            'remember' => null,
        ];

        $responseLogin = $this->post('/sign-in', $login);
        $responseLogin->assertValid();

        $response = $this->get(route('dashboard.post.index'));
        $response->assertStatus(200);
        $response->assertViewHas('posts');
    }
}
