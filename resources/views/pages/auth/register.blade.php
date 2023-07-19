@extends('layouts.auth')

@section('title', 'Sign Up')

@section('content')
    <section class="container rounded-3 border shadow-sm p-5" style="max-width: 600px">
        <h1 class="text-center mb-5 fs-3 fw-semibold">Create an account</h1>
        <form action="" class="d-flex flex-column justify-content-center mb-5">
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control form-control-lg fs-6" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" id="email" name="email" class="form-control form-control-lg fs-6" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" id="password" name="password" class="form-control form-control-lg fs-6" placeholder="·········" required>
            </div>
            <div class="mb-4">
                <label for="confirmPwd" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" id="confirmPwd" name="confirm_password" class="form-control form-control-lg fs-6" placeholder="·········" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
        <p class="text-center m-0">You already have an account? <a href={{ route('signin') }} class="text-decoration-none">Sign In</a></p>
    </section>
@endsection
