@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Reviews</h2>
        <a href="{{ route('admin.reviews.create') }}" class="btn btn-primary">Add Review</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Content</th>
                <th>Rating</th>
                <th>Approved</th>
                <th>Show on Index</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->author }}</td>
                <td>{{ Str::limit($review->content, 50) }}</td>
                <td>{{ $review->rating }}/5</td>
                <td>
                    @if($review->approved)
                        <span class="badge bg-success">Yes</span>
                    @else
                        <span class="badge bg-danger">No</span>
                    @endif
                </td>
                <td>
                    @if($review->show_on_index)
                        <span class="badge bg-primary">Visible</span>
                    @else
                        <span class="badge bg-secondary">Hidden</span>
                    @endif
                </td>
                <td>{{ $review->created_at->format('d M Y') }}</td>
                <td>
                    <a href="{{ route('admin.reviews.show', $review) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('admin.reviews.edit', $review) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="8" class="text-center">No reviews found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
