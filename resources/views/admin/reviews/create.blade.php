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
            <h4>Add Review</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.reviews.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                    @error('author')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating (1–5)</label>
                    <input type="number" name="rating" id="rating" min="1" max="5" class="form-control" required>
                    @error('rating')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="approved" class="form-label">Approved</label>
                    <select name="approved" id="approved" class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="show_on_index" class="form-label">Show on Index</label>
                    <select name="show_on_index" id="show_on_index" class="form-control">
                        <option value="1">Visible</option>
                        <option value="0">Hidden</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Create Review</button>
                <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
