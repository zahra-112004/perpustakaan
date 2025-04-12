@extends('layouts.app')

@section('background')
    background-image: url('{{ asset('images/perpustakaan2.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
@endsection

@section('content')
    <div class="container mt-5" style="max-width: 400px;">
        <h3 class="text-center text-black mb-4">Login</h3>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label text-white">Username</label>
                <input type="text" name="username" class="form-control" required value="{{ old('username') }}">
                @error('username')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="text-center mt-3">
                Belum punya akun? <a href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
@endsection
