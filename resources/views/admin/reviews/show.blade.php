@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Review Details</h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Author:</div>
                <div class="col-md-9">{{ $review->author }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Content:</div>
                <div class="col-md-9">"{{ $review->content }}"</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Rating:</div>
                <div class="col-md-9">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $review->rating)
                            ★
                        @else
                            ☆
                        @endif
                    @endfor
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Approved:</div>
                <div class="col-md-9">
                    @if ($review->approved)
                        <span class="badge bg-success">Yes</span>
                    @else
                        <span class="badge bg-danger">No</span>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Show on Index:</div>
                <div class="col-md-9">
                    @if ($review->show_on_index)
                        <span class="badge bg-info">Visible</span>
                    @else
                        <span class="badge bg-secondary">Hidden</span>
                    @endif
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
