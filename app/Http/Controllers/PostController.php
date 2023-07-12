<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = [
            'title' => 'First Article',
            'slug' => 'first-article',
            'category' => 'Programming',
            'read_times' => '10',
            'author' => 'Author Name',
            'upload_date' => '20 June',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex distinctio explicabo mollitia recusandae nemo beatae totam neque odit corporis consectetur similique rem ratione, magnam, amet eos illum vero eveniet ut deserunt in quis veritatis quae! Quo cumque sed deserunt. Aut, laborum ex aliquam nam rerum at iusto doloribus explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.</p>',
        ];

        return view('content.post.detail', [
            'post' => $post,
        ]);
    }
}
