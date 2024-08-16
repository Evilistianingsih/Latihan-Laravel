@extends('dashboard.layouts.main')

@section('container')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">User Details</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Name:</label>
                        <p class="card-text">{{ $users->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Username:</label>
                        <p class="card-text">{{ $users->username }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email:</label>
                        <p class="card-text">{{ $users->email }}</p>
                    </div>
                    <a href="/dashboard/users" class="btn btn-primary mt-3">Back to All Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
