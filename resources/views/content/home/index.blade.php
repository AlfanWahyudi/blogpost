@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <section class="row">
        <h1 class="visually-hidden">Home Page</h1>
        <section class="col-lg-9">
            <h2 class="fw-semibold fs-5 mb-4">All Posts</h2>
            <section id="posts">
                @forelse ($posts as $post)
                    <article class="d-flex align-items-center pt-4 pb-5">
                        <div class="col-md-8">
                            <header class="d-flex gap-3 align-items-center mb-2">
                                <h3 class="m-0 fs-6">
                                    {{ $post->user->first_name }} {{ $post->user->last_name }}
                                </h3>
                            </header>
                            <div class="position-relative">
                                <h3 class="fs-5 fw-bold mb-1">
                                    <a href={{ route('post.detail', ['slug' => $post->slug]) }}
                                        class="stretched-link text-decoration-none">{{ $post->title }}</a>
                                </h3>
                                <p>{{ $post->excerpt }}</p>
                            </div>
                            <p class="m-0">
                                <span class="fw-light">20 June, No Data For This</span>
                                <span class="fw-light ms-3">10 mins read No Data For This</span>
                                <a href="#" class="badge text-bg-primary text-decoration-none fs-6 ms-3">{{ $post->category->name }}</a>
                            </p>
                        </div>
                        <div class="col-md-4 ps-2">
                            <a href={{ route('post.detail', ['slug' => $post->slug]) }}>
                                <img src={{ asset('img/programming.jpg') }} class="w-100 object-fit-cover border rounded"
                                    alt="Gambar Programming">
                            </a>
                        </div>
                    </article>
                @empty
                    <h3>Sorry there are no posts yet</h3>
                @endforelse
            </section>
        </section>
        <aside class="col-lg-3">
            {{-- TODO: Styling for aside section --}}
            {{-- <section>
                <h2 class="fs-6">Categories</h2>
                <ul>
                    <li>Category 1</li>
                    <li>Category 2</li>
                    <li>Category 3</li>
                </ul>
            </section>
            <footer></footer> --}}
        </aside>
    </section>
@endsection
