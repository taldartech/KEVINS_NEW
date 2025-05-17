@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Add Tour Package</h2>
    <form action="{{ route('admin.tour-packages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control">
        </div>
        <div class="mb-3">
            <label for="itinerary" class="form-label">Itinerary (comma-separated)</label>
            <input type="text" name="itinerary" id="itinerary" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Create Tour Package</button>
        <a href="{{ route('admin.tour-packages.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
