
@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        

    <div class="container mt-4">
        <div class="mb-3 text-end">
            <a href="{{ route('admin.taldarpopups.create') }}" class="btn btn-primary">Add Taldarpopup</a>
        </div>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Taldarpopups</h4>
               
            </div>
           
            <div class="card-body p-0">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Sr. No</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Link</th>
                            <th>Is Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($taldarpopups->count() > 0)
                            @for($i = 0; $i < count($taldarpopups); $i++)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $taldarpopups[$i]->title }}</td>
                                    <td>{{ $taldarpopups[$i]->content }}</td>
                                    <td>
                                        <a href="{{ $taldarpopups[$i]->link }}" target="_blank" class="text-primary">
                                            {{ $taldarpopups[$i]->link }}
                                        </a>
                                    </td>
                                    <td>
                                        @if($taldarpopups[$i]->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.taldarpopups.edit', $taldarpopups[$i]->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('admin.taldarpopups.destroy', $taldarpopups[$i]->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endfor
                        @else
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    No records found.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection


