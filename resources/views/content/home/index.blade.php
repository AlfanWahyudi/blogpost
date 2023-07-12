@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <section class="row">
        <h1 class="visually-hidden">Home Page</h1>
        <section class="col-lg-9">
            <h2 class="fw-semibold fs-5 mb-4">All Posts</h2>
            <section id="posts">
                <article class="d-flex align-items-center py-4">
                    <div class="col-md-8">
                        <header class="d-flex gap-3 align-items-center mb-2">
                            <h3 class="m-0 fs-6">Lorem Author</h3>
                        </header>
                        <div class="position-relative">
                            <h3 class="fs-5 fw-bold mb-1">
                                <a href={{ route('post.detail', ['slug' => 'article-title']) }}
                                    class="stretched-link text-decoration-none">Article Title</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, eos.</p>
                        </div>
                        <p class="m-0">
                            <span class="fw-light">20 June</span>
                            <span class="fw-light ms-3">10 mins read</span>
                            <a href="#" class="badge text-bg-primary text-decoration-none fs-6 ms-3">Programming</a>
                        </p>
                    </div>
                    <div class="col-md-4 ps-2">
                        <a href={{ route('post.detail', ['slug' => 'article-title']) }}>
                            <img src={{ asset('img/programming.jpg') }} class="w-100 object-fit-cover border rounded"
                                alt="Gambar Programming">
                        </a>
                    </div>
                </article>
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
