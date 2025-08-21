@extends('layouts.app')

@section('content')
@if(session('warning'))
<div class="alert alert-warning">{{ session('warning') }}</div>
@endif

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Blog</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" required value="{{ $blog->title }}">
                        </div>

                        <!-- Content -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea name="content" id="content" class="form-control" placeholder="Enter Blog Content" rows="5" required>{{ $blog->content }}</textarea>
                        </div>

                        <!-- Author -->
                        <div class="mb-3">
                            <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
                            <input type="text" name="author" id="author" class="form-control" placeholder="Enter Author Name" required value="{{ $blog->author }}">
                        </div>

                        <!-- Published Date -->
                        <div class="mb-3">
                            <label for="published_at" class="form-label">Publish Date <span class="text-danger">*</span></label>
                            <input type="date" name="published_at" id="published_at" class="form-control" 
       required value="{{ \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d') }}">

                            {{-- <input type="date" name="published_at" id="published_at" class="form-control" required value="{{ $blog->published_at }}"> --}}
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
                            <small class="text-muted">Image size should be less than 295kb</small>
                            <img src="{{ asset($blog->image_url) }}" alt="Blog Image" class="mt-2" width="100">
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success">Update Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
