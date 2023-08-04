@extends('layouts.dashboard')

@section('title', 'Home')

@section('content')
<div class="mx-auto" style="max-width: 55rem;">
    <h1 class="fw-medium fs-4">Posts</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
    <section class="hstack gap-3 pt-3">
        <h2 class="visually-hidden">Filter Post</h2>
        <input type="search" name="" id="" class="form-control" placeholder="Search post">
        <button class="btn btn-primary rounded-pill">Date</button>
        <button class="btn btn-primary rounded-pill">Category</button>
    </section>
    <section class="pt-3">
        <h2 class="visually-hidden">Posts List</h2>
        @forelse ($posts as $post)
            <article class="card mb-3">
                <h3 class="visually-hidden">Card Post</h3>
                <div class="card-body">
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <h4 class="flex-grow-1 fs-5 m-0 d-inline-block text-truncate">
                            {{ $post->title }}
                        </h4>
                        <div class="dropdown p-0">
                            <button class="btn btn-link text-dark text-decoration-none dropdown-toggle p-0" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">Share</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">Blog Site</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-unstyled hstack gap-3 m-0">
                        <li>{{ $post->updated_at == null ? '-' : $post->likes }}</li>
                        <li>{{ $post->category->name }}</li>
                        <li>{{ $post->likes == null ? '0' : $post->likes }} likes</li>
                    </ul>
                </div>
            </article>
        @empty
            <p class="fs-5 fw-semibold text-center">There is no posts yet</p>
        @endforelse
    </section>
</div>
@endsection
