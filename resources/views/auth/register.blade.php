@extends('layouts.auth')

@section('title', 'Sign Up')

@section('content')
    <section class="container rounded-3 border shadow-sm p-5" style="max-width: 600px">
        <h1 class="text-center mb-5 fs-3 fw-semibold">Create an account</h1>
        <form action="{{ route('signup.store') }}" method="POST" class="d-flex flex-column justify-content-center mb-5">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" id="name" name="name"
                    class="form-control form-control-lg fs-6 @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"
                    placeholder="Enter your full name" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" id="email" name="email"
                    class="form-control form-control-lg fs-6 @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    placeholder="Enter your email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" id="password" name="password"
                    class="form-control form-control-lg fs-6 @error('password') is-invalid @enderror"
                    placeholder="·········" minlength="8" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="passwordConfirmation" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" id="passwordConfirmation" name="password_confirmation"
                    class="form-control form-control-lg fs-6"
                    placeholder="·········" minlength="8" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
        <p class="text-center m-0">You already have an account? <a href={{ route('signin') }}
                class="text-decoration-none">Sign In</a></p>
    </section>
@endsection
