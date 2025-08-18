@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="mb-3 text-end">
        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">Add Picture</a>
    </div>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Pictures</h4>
        </div>

        <div class="card-body p-0">
            <table class="table table-bordered table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Sr. No</th>
                        <th>Image</th>
                        <th>Caption</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($galleries->count() > 0)
                        @foreach($galleries as $index => $gallery)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <img src="{{ asset($gallery->image_url) }}" alt="Gallery Image" width="120">
                                </td>
                                <td>{{ $gallery->caption ?? '-' }}</td>
                                <td>
                                    <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this picture?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                No pictures found.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
