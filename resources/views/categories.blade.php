@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://images.unsplash.com/photo-1719937206158-cad5e6775044?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                style="width: 100%; height: 100%;" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-item-center p-0">
                                <h5 class="card-title text-center flex-fill p-5 fs-3"
                                    style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
