<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{

    private $data = [
        'user_id' => '2',
        'category_id' => '2',
        'title' => 'Test Title',
        'slug' => 'test-title',
        'excerpt' => 'Test Excerpt Lorem Test Lorem',
        'content' => '<p><strong>Lorem</strong> ipsum dolor, sit amet consectetur adipisicing elit.</p><p>Quia expedita ducimus voluptates inventore corrupti eaque,</p><p>laudantium porro. Quasi, quas voluptatem!</p>',
        'read_time_minutes' => 3,
    ];


    private function loginSuccess(): void
    {
        $login = [
            'email' => 'alfan@gmail.com',
            'password' => '123',
            'remember' => null,
        ];

        $responseLogin = $this->post('/sign-in', $login);
        $responseLogin->assertValid();
    }

    public function test_open_posts_page(): void
    {
        $this->loginSuccess();

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

    public function test_store_post_data(): void
    {
        $this->loginSuccess();

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertValid();
        $response->assertRedirectToRoute('dashboard.post.index');
    }

    /**
     * test validasi input semua data kosong
    */
    public function test_validation_input_all_post_data_empty(): void
    {
        $this->loginSuccess();

        $this->data['user_id'] = '';
        $this->data['category_id'] = '';
        $this->data['title'] = '';
        $this->data['slug'] = '';
        $this->data['excerpt'] = '';
        $this->data['content'] = '';
        $this->data['read_time_minutes'] = null;

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['user_id', 'category_id', 'title', 'slug', 'content', 'read_time_minutes']);
    }

    /**
     * test validasi input user_id kosong
     */
    public function test_validation_input_user_id_empty(): void
    {
        $this->loginSuccess();

        $this->data['user_id'] = '';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['user_id']);
    }

    /**
     * test validasi input category_id kosong
     */
    public function test_validation_input_category_id_empty(): void
    {
        $this->loginSuccess();

        $this->data['category_id'] = '';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['category_id']);
    }

    /**
     * test validasi input title kosong
     */
    public function test_validation_input_title_empty(): void
    {
        $this->loginSuccess();

        $this->data['title'] = '';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['title']);
    }

    /**
     * test validasi input slug kosong
     */
    public function test_validation_input_slug_empty(): void
    {
        $this->loginSuccess();

        $this->data['slug'] = '';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['slug']);
    }

    /**
     * test validasi input slug harus unique
     */
    public function test_validation_input_slug_must_unique(): void
    {
        $this->loginSuccess();

        $this->data['slug'] = 'lorem-1';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['slug']);
    }

    /**
     * test validasi input slug dengan format salah
     */
    public function test_validation_input_slug_with_wrong_format(): void
    {
        $this->loginSuccess();

        $this->data['slug'] = 'alfan-wahyudi123123#@!#@';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid([
            'slug' => 'The slug field format is invalid.'
        ]);
    }

    /**
     * test validasi input content kosong
     */
    public function test_validation_input_content_empty(): void
    {
        $this->loginSuccess();

        $this->data['content'] = '';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['content']);
    }

    /**
     * test validasi input read_time_minutes kosong
     */
    public function test_validation_input_read_time_minutes_empty(): void
    {
        $this->loginSuccess();

        $this->data['read_time_minutes'] = '';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['read_time_minutes']);
    }

    /**
     * test validasi input read_time_minutes bukan numerik
     */
    public function test_validation_input_read_time_not_numeric(): void
    {
        $this->loginSuccess();

        $this->data['read_time_minutes'] = 'test read time must numeric';

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['read_time_minutes']);
    }

    /**
     * test validasi input read_time_minutes 0 menit
     */
    public function test_validation_input_read_time_zero_minute(): void
    {
        $this->loginSuccess();

        $this->data['read_time_minutes'] = 0;

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['read_time_minutes']);
    }

    /**
     * test validasi input read_time_minutes lebih dari 99 menit
     */
    public function test_validation_input_read_time_more_than_99(): void
    {
        $this->loginSuccess();

        $this->data['read_time_minutes'] = 100;

        $response = $this->post(route('dashboard.post.store'), $this->data);
        $response->assertInvalid(['read_time_minutes']);
    }
}
