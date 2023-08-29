@extends('layouts.dashboard')

@section('title', 'Write New Post')

@section('content')
    <form action="{{ route('dashboard.post.store') }}" method="POST">
        @csrf
        <div class="d-flex justify-content-between mb-4">
            <h1 class="fw-medium fs-4">Create Post</h1>
            <div class="d-flex gap-3">
                <button type="submit" class="btn btn-outline-secondary rounded-pill disabled" disabled>Save Draft</button>
                <button type="submit" class="btn btn-primary rounded-pill">Save & Publish</button>
            </div>
        </div>
        <div class="row">
            <section class="d-flex flex-column col-8">
                <input type="text" id="title" name="title"
                    class="form-control @error('title') is-invalid @enderror " placeholder="Enter Title..."
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-floating mt-3">
                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror "
                        placeholder="Write blogpost here" style="min-height: 50vh;">{{ old('content') }}</textarea>
                    <label for="content">Blog</label>
                </div>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </section>
            <aside class="border rounded-1 p-4 col-4">
                <h2 class="fs-5 fw-semibold mb-4">Lorem Title</h2>
                <div class="mb-3">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <textarea id="excerpt" name="excerpt" class="form-control @error('excerpt') is-invalid @enderror">{{ old('excerpt') }}</textarea>
                </div>
                @error('excerpt')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" id="slug" name="slug"
                        class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}">
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" name="category_id" class="form-select @error('category_id') is-invalid @enderror"
                        data-old-value="{{ old('category_id') }}" aria-label="Select Category">
                        <option value="">---</option>
                        @foreach ($categories as $category)
                            <option value={{ $category->id }}
                                {{ $category->id == old('category_id') ? "selected" : ""  }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="readTime" class="form-label">Read Time <span class="fw-light">(minutes)</span></label>
                    <input type="number" id="readTime" name="read_time_minutes"
                        class="form-control @error('read_time_minutes') is-invalid @enderror"
                        value="{{ old('read_time_minutes') }}">
                    @error('read_time_minutes')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </aside>
        </div>
    </form>
@endsection
