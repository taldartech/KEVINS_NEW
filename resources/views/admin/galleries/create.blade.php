@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- Show warning message if validation fails --}}
    @if(session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif

    {{-- Show success message if redirected back --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Show validation errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add Picture</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Image Upload --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image <span class="text-danger">*</span></label>
                    <input type="file" name="image" id="image" class="form-control" required>
                    <small class="text-muted">Allowed formats: JPG, JPEG, PNG | Max size: 295 KB </small>
                </div>

                {{-- Caption --}}
                <div class="mb-3">
                    <label for="caption" class="form-label">Caption (optional)</label>
                    <input type="text" name="caption" id="caption" class="form-control" value="{{ old('caption') }}">
                </div>

                {{-- Buttons --}}
                <div class="text-end">
                    <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Save Picture</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
