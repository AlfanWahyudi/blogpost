<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::where('user_id', auth()->user()->id)
            ->orderByDesc('updated_at')
            ->get();

        return view('dashboard.posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        //TODO:Authorize
        try {
            $validate = $request->validated();

            $post = new Post();
            $post->user_id = $request->user_id;
            $post->category_id = $request->category_id;
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->excerpt = $request->excerpt;
            $post->content = $request->content;
            $post->read_time_minutes = $request->read_time_minutes;
            $post->save();

            // //TODO: change success message
            return redirect()
                ->route('dashboard.post.index')
                ->with('success', 'Successfully create new post');

        } catch (\Throwable $th) {
            //TODO: change return view to actual error page
            return 'Something went wrong';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug): RedirectResponse
    {
        //TODO: fix update post
        $post = Post::firstWhere('slug', $slug);
        $user = auth()->user();

        if ($request->user->cannot('update', [$user, $post]))
        {
            abort(403);
        }
        // $this->authorize('update', [
        //     $user,
        //     $post
        // ]);

        return redirect()->route('dashboard.post.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
