@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Edit Tour Package</h2>
    <form action="{{ route('admin.tour-packages.update', $tourPackage) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $tourPackage->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $tourPackage->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $tourPackage->price }}">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" value="{{ $tourPackage->duration }}">
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control" value="{{ $tourPackage->image_url }}">
        </div>
        <div class="mb-3">
            <label for="itinerary" class="form-label">Itinerary (comma-separated)</label>
            <input type="text" name="itinerary" id="itinerary" class="form-control" value="{{ is_array($tourPackage->itinerary) ? implode(',', $tourPackage->itinerary) : $tourPackage->itinerary }}">
        </div>
        <button type="submit" class="btn btn-success">Update Tour Package</button>
        <a href="{{ route('admin.tour-packages.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
