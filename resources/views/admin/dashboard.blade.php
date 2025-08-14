@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Admin Dashboard</h1>
    <div class="list-group">
        <a href="{{ route('admin.rooms.index') }}" class="list-group-item list-group-item-action">Manage Rooms</a>
        <a href="{{ route('admin.tour-packages.index') }}" class="list-group-item list-group-item-action">Manage Tour Packages</a>
        <a href="{{ route('admin.places.index') }}" class="list-group-item list-group-item-action">Manage Places to Visit</a>
        <a href="{{ route('admin.gallery.index') }}" class="list-group-item list-group-item-action">Manage Gallery</a>
        <a href="{{ route('admin.blogs.index') }}" class="list-group-item list-group-item-action">Manage Blog</a>
        <a href="{{ route('admin.reviews.index') }}" class="list-group-item list-group-item-action">Manage Reviews</a>
        <a href="{{ route('admin.taldarpopups.index') }}" class="list-group-item list-group-item-action">Manage Taldarpopup</a>
    </div>
</div>
@endsection
