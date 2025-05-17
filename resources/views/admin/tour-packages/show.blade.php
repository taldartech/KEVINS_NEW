@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Tour Package Details</h2>
    <div class="card mb-3">
        <div class="row g-0">
            @if($tourPackage->image_url)
            <div class="col-md-4">
                <img src="{{ $tourPackage->image_url }}" class="img-fluid rounded-start" alt="Tour Package Image">
            </div>
            @endif
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $tourPackage->name }}</h5>
                    <p class="card-text">{{ $tourPackage->description }}</p>
                    <p class="card-text"><strong>Price:</strong> {{ $tourPackage->price }}</p>
                    <p class="card-text"><strong>Duration:</strong> {{ $tourPackage->duration }}</p>
                    <p class="card-text"><strong>Itinerary:</strong> {{ is_array($tourPackage->itinerary) ? implode(', ', $tourPackage->itinerary) : $tourPackage->itinerary }}</p>
                    <a href="{{ route('admin.tour-packages.edit', $tourPackage) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('admin.tour-packages.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
