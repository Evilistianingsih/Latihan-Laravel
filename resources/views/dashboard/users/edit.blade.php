@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update User</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/users/{{ $users->id }}" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="mb-1">Name</label>
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                    id="name" required value="{{ old('name', $users->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="mb-1">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                    id="username" required value="{{ old('username', $users->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="mb-1">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" required value="{{ old('email', $users->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="mb-1">Password</label>
                <input type="password" name="password"
                    class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
@endsection
