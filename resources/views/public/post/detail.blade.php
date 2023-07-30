@extends('layouts.main')

@section('title', $post->title)

@section('content')
    <header class="pb-3 border-bottom">
        <h1 class="fw-bold fs-2">{{ $post->title }}</h1>
        <div class="d-flex align-items-center gap-3">
            <p class="m-0">
                {{ $post->user->first_name }}
                {{ $post->user->last_name }}
            </p>
            <p class="m-0">{{ $post->updated_at }}</p>
            <p class="m-0">10 minutes read No Data For This In DB</p>
            <p class="m-0">{{ $post->category->name }}</p>
            <button class="btn btn-secondary rounded-pill ms-auto">Share</button>
        </div>
    </header>
    <section id="contentArticle" class="pt-3 pb-5">
        {!! $post->content !!}
    </section>
@endsection

@section('footer')
    <footer class="border-top py-4 d-flex justify-content-center">
        <ul class="list-unstyled d-flex my-1">
            <li class="mx-3">
                <a href="#" class="text-decoration-none text-secondary">About</a>
            </li>
            <li class="mx-3">
                <a href="#" class="text-decoration-none text-secondary">Contact</a>
            </li>
            <li class="mx-3">
                <a href="#" class="text-decoration-none text-secondary">Terms and condition</a>
            </li>
            <li class="mx-3">
                <a href="#" class="text-decoration-none text-secondary">Policy</a>
            </li>
        </ul>
    </footer>
@endsection
