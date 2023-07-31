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
        <article class="card mb-3">
            <h3 class="visually-hidden">Card Post</h3>
            <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                    <h4 class="flex-grow-1 fs-5 m-0 d-inline-block text-truncate">
                        Lorem Title Lorem Ipsum Dolor Sit Amet Consectetur lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. At, impedit?
                    </h4>
                    <div class="dropdown p-0">
                        <button class="btn btn-link text-dark text-decoration-none dropdown-toggle p-0" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">Delete</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Share</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">To web</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="list-unstyled hstack gap-3 m-0">
                    <li>20 April 2023</li>
                    <li>Tech</li>
                    <li>10 comments</li>
                </ul>
            </div>
        </article>
    </section>
</div>
@endsection
