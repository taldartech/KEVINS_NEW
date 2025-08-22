@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Rooms</h2>
        <a href="{{ route('admin.rooms.create') }}" class="btn btn-primary">Add Room</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($rooms as $room)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->price }}</td>
                <td>{{ $room->capacity }}</td>
                <td>
                    <a href="{{ route('admin.rooms.show', $room) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('admin.rooms.edit', $room) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.rooms.destroy', $room) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">No rooms found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
