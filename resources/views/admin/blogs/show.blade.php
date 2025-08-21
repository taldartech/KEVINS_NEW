@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Blog Details</h4>
        </div>
        <div class="card-body">

            <!-- Title -->
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Title:</div>
                <div class="col-md-9">{{ $blog->title }}</div>
            </div>

            <!-- Content -->
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Content:</div>
                <div class="col-md-9">{{ $blog->content }}</div>
            </div>

            <!-- Author -->
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Author:</div>
                <div class="col-md-9">{{ $blog->author }}</div>
            </div>

            <!-- Published Date -->
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Published At:</div>
                <div class="col-md-9">
                    {{ \Carbon\Carbon::parse($blog->published_at)->format('d M Y') }}
                </div>
            </div>

            <!-- Image -->
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Image:</div>
                <div class="col-md-9">
                    @if($blog->image_url)
                        <img src="{{ asset($blog->image_url) }}" alt="Blog Image" class="img-fluid rounded shadow-sm" style="max-width: 300px;">
                    @else
                        <span class="text-muted">No image uploaded</span>
                    @endif
                </div>
            </div>

            <!-- Buttons -->
            <div class="mt-4">
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
