<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
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

            return view('pages.public.post.detail', [
                'post' => $post,
            ]);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
