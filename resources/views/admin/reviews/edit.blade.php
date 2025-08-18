@extends('layouts.app')

@section('content')
@if(session('warning'))
<div class="alert alert-warning">
    {{ session('warning') }}
</div>
@endif
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Edit Review</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" id="author" class="form-control" required value="{{ $review->author }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="4" required>{{ $review->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating (1–5)</label>
                    <input type="number" name="rating" id="rating" min="1" max="5" class="form-control" required value="{{ $review->rating }}">
                </div>
                <div class="mb-3">
                    <label for="approved" class="form-label">Approved</label>
                    <select name="approved" id="approved" class="form-control" value="{{ $review->approved }}">
                        <option value="1" {{ $review->approved == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $review->approved == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="show_on_index" class="form-label">Show on Index</label>
                    <select name="show_on_index" id="show_on_index" class="form-control" value="{{ $review->show_on_index }}">
                        <option value="1" {{ $review->show_on_index == 1 ? 'selected' : '' }}>Visible</option>
                        <option value="0" {{ $review->show_on_index == 0 ? 'selected' : '' }}>Hidden</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Update Review</button>
                <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
