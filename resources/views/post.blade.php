@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By <a href="/authors/{{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="https://images.unsplash.com/photo-1719937206158-cad5e6775044?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    style="width: 100%; height: 500px;" alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>


                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
