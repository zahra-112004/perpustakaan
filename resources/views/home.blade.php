@extends('layouts.app')

@section('background')
    background-image: url('{{ asset('images/perpustakaan6.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
@endsection

@section('content')
    <div class="container text-center mt-5">
        <h1 class="mb-4">📚 Selamat Datang di Aplikasi Perpustakaan</h1>
        <p class="lead">Kelola data buku dengan mudah melalui sistem CRUD Laravel.</p>

        <h2 class="mt-4">Selamat datang, {{ auth()->user()->username }}!</h2>

        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Lihat Daftar Buku</a>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
@endsection
