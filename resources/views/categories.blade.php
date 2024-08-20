@extends('layouts.main')
@section('container')
    <h1 class="mb-5 text-center">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="/posts?category={{ $category->slug }}" class="text-decoration-none">
                        <div class="card bg-dark text-white border-0">
                            <img src="https://exprodi.co.id/disk/img/produk_layanan/gambar-post-4eym3dlu8fjypwq6-1569813518862.jpg"
                                class="card-img-top" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                <h5 class="card-title text-center p-3 fs-4"
                                    style="background-color: rgba(0, 0, 0, 0.7);">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
