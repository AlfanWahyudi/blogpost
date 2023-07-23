<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        try {

            $posts = Post::all()->reverse();

            return view('pages.public.home.index', [
                'posts' => $posts
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
