@extends('layouts.auth')

@section('title', 'Sign In')

@section('content')
    @if (session('success'))
        <div class="container-fluid alert alert-info alert-dismissible" role="alert" style="max-width: 500px">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @error('email')
        <div class="container-fluid alert alert-danger alert-dismissible" role="alert" style="max-width: 500px">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror
    <section class="container-fluid rounded-3 border shadow-sm p-5" style="max-width: 500px">
        <section>
            <h1 class="text-center mb-4 fs-3 fw-semibold">Sign In</h1>
            <form action="{{ route('signin.authenticate') }}" method="POST" class="d-flex flex-column justify-content-center mb-5">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg fs-6"
                        placeholder="Enter your email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg fs-6"
                        placeholder="·········" required>
                </div>
                <div class="row mb-4 px-3">
                    <div class="col form-check">
                        <input type="checkbox" id="remember" name="remember" class="form-check-input">
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                    <div class="col">
                        <a href="#" class="text-decoration-none d-block text-end">Forgot password?</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            <p class="text-center">You don't have an account yet? <a href={{ route('signup.create') }}
                    class="text-decoration-none">Sign Up</a></p>
        </section>
    </section>
@endsection
