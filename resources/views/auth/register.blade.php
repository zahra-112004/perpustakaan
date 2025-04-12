@extends('layouts.app')

@section('background')
    background-image: url('{{ asset('images/perpustakaan2.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
@endsection

@section('content')
<div class="container mt-5" style="max-width: 500px;">
    <h3 class="text-center text-white mb-4">Register</h3>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="username" class="form-label text-white">Username</label> 
            <input type="text" name="username" class="form-control" required value="{{ old('username') }}">
            @error('username')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label text-white">Email</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            @error('email')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label text-white">Password (min. 6 karakter)</label>
            <input type="password" name="password" class="form-control" required>
            @error('password')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success w-100">Daftar</button>
        <div class="text-center mt-3">
            Sudah punya akun? <a href="{{ route('login') }}">Login</a>
        </div>
    </form>
</div>
@endsection
