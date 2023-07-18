<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $posts = Post::all()->reverse();

            return view('content.home.index', [
                'posts' => $posts
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
