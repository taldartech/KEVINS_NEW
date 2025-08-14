@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Tour Package</h4>
                </div>
                <div class="card-body">
    
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

        <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">Update Tour Package</button>
        
        <a href="{{ route('admin.tour-packages.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
    </form>
</div>
</div>
</div>
@endsection
