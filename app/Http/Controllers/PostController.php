<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        try {

            $post = Post::where('slug', '=', $slug)->firstOrFail();

            return view('content.post.detail', [
                'post' => $post,
            ]);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
