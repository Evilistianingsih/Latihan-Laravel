@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8"> <!-- Perbaikan typo dari 'col-md8' menjadi 'col-md-8' -->
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>
                    By 
                    @if ($post->author)
                        <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                            {{ $post->author->name }}
                        </a>
                    @else
                        Penulis
                    @endif
                    in 
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="https://www.webworxtechnology.com/wp-content/uploads/2018/06/web-development.jpg"
                            alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
