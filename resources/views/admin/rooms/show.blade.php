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
<div class="container py-4">
    <h2>Room Details</h2>
    <div class="card mb-3">
        <div class="row g-0">
            @if($room->image_url)
            {{-- <div class="col-md-4">
                <img src="{{ $room->image_url }}" class="img-fluid rounded-start" alt="Room Image">
            </div> --}}
            <div class="col-md-4">
              
                <img src="{{ asset($room->image_url) }}" 
                     class="img-fluid rounded-start" 
                     alt="Room Image">
            
        </div>
            @endif
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $room->name }}</h5>
                    <p class="card-text">{{ $room->description }}</p>
                    <p class="card-text"><strong>Price:</strong> {{ $room->price }}</p>
                    <p class="card-text"><strong>Capacity:</strong> {{ $room->capacity }}</p>
                    <p class="card-text"><strong>Amenities:</strong> {{ is_array($room->amenities) ? implode(', ', $room->amenities) : $room->amenities }}</p>
                    <a href="{{ route('admin.rooms.edit', $room) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
