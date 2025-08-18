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

    <h4>Edit Room</h4>
    </div>
    <div class="card-body">
    <form action="{{ route('admin.rooms.update', $room) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $room->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $room->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $room->price }}">
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="file" name="image" id="image" class="form-control" value="{{ $room->image_url }}">
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" name="capacity" id="capacity" class="form-control" value="{{ $room->capacity }}">
        </div>
        <div class="mb-3">
            <label for="amenities" class="form-label">Amenities (comma-separated)</label>
            <input type="text" name="amenities" id="amenities" class="form-control" value="{{ is_array($room->amenities) ? implode(',', $room->amenities) : $room->amenities }}">
        </div>
        <button type="submit" class="btn btn-success">Update Room</button>
        <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
    </div>
    </div>
</div>
@endsection
