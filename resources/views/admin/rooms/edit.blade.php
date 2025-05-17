@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Edit Room</h2>
    <form action="{{ route('admin.rooms.update', $room) }}" method="POST">
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
            <input type="text" name="image_url" id="image_url" class="form-control" value="{{ $room->image_url }}">
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
@endsection
