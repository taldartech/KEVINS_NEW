@extends('layouts.app')

@section('content')
@if(session('warning'))
<div class="alert alert-warning">{{ session('warning') }}</div>
@endif
{{-- <div class="container py-4">
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
</div> --}}

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add Tour Package</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tour-packages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter tour package name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter tour description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Enter price">
                        </div>

                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="text" name="duration" id="duration" class="form-control" placeholder="e.g. 5 days, 1 week">
                        </div>

                        <div class="mb-3">
                            <label for="image_url" class="form-label">Image URL</label>
                            <input type="file" name="image" id="image" class="form-control" placeholder="Enter image URL" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="itinerary" class="form-label">Itinerary (comma-separated)</label>
                            <input type="text" name="itinerary" id="itinerary" class="form-control" placeholder="Day 1: City tour, Day 2: Beach visit">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.tour-packages.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success">Create Tour Package</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
