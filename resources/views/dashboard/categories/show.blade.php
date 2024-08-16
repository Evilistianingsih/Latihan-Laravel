@extends('dashboard.layouts.main')

@section('container')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Category Details</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Category Name:</label>
                        <p class="card-text">{{ $categories->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Slug:</label>
                        <p class="card-text">{{ $categories->slug }}</p>
                    </div>
                    <a href="/dashboard/categories" class="btn btn-primary mt-3">Back to All Categories</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
