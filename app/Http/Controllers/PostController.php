<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
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
