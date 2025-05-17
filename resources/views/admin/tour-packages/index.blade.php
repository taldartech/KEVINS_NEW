@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Tour Packages</h2>
        <a href="{{ route('admin.tour-packages.create') }}" class="btn btn-primary">Add Tour Package</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($tourPackages as $tourPackage)
            <tr>
                <td>{{ $tourPackage->id }}</td>
                <td>{{ $tourPackage->name }}</td>
                <td>{{ $tourPackage->price }}</td>
                <td>{{ $tourPackage->duration }}</td>
                <td>
                    <a href="{{ route('admin.tour-packages.show', $tourPackage) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('admin.tour-packages.edit', $tourPackage) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.tour-packages.destroy', $tourPackage) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">No tour packages found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
