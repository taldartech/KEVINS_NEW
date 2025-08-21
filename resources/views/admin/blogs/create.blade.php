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
                    <h4 class="mb-0">Add Blog</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" required>
                        </div>

                        <!-- Content -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea name="content" id="content" class="form-control" placeholder="Enter Blog Content" rows="5" required></textarea>
                        </div>

                        <!-- Author -->
                        <div class="mb-3">
                            <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
                            <input type="text" name="author" id="author" class="form-control" placeholder="Enter Author Name" required>
                        </div>

                        <!-- Published Date -->
                        <div class="mb-3">
                            <label for="published_at" class="form-label">Publish Date <span class="text-danger">*</span></label>
                            <input type="date" name="published_at" id="published_at" class="form-control" required>
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
                            <small class="text-muted">Image size should be less than 295kb</small>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success">Create Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
