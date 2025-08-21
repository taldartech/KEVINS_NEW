@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Blogs</h2>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add Blog</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Published At</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($blogs as $blog)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ Str::limit($blog->content, 50) }}</td>
                <td>
                    @if($blog->image_url)
                        <img src="{{ asset($blog->image_url) }}" alt="Blog Image" class="img-fluid" width="100">
                    @endif
                </td> 
                <td>
                    {{ $blog->published_at->format('d M Y') }}
                </td>
                <td>{{ $blog->author }}</td>               
                <td>
                    <a href="{{ route('admin.blogs.show', $blog) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7" class="text-center">No blogs found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
