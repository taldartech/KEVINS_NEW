@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Create pop-up</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.taldarpopups.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                        @error('title')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" class="form-control" required></textarea>
                        @error('content')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="url" name="link" id="link" class="form-control" required>
                        @error('link')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="is_active" class="form-label">Is Active</label>
                        <select name="is_active" id="is_active" class="form-control" required>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create pop-up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
