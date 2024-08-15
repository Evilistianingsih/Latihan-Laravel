@extends('dashboard.layouts.main')

@section('container')
<div class="container my-4">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $categories->name }}</h3>
                    <p class="card-text">{{ $categories->slug }}</p>
                    <a href="/dashboard/categories/" class="btn btn-primary">Back All Category</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
