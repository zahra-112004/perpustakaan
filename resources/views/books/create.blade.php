@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Buku</h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            {{-- Judul --}}
            <div class="mb-3">
                <label for="title" class="form-label">Judul Buku</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message ?: 'Judul wajib diisi' }}</div>
                @enderror
            </div>

            {{-- Tahun --}}
            <div class="mb-3">
                <label for="year" class="form-label">Tahun Terbit</label>
                <input type="number" name="year" class="form-control @error('year') is-invalid @enderror"
                    value="{{ old('year') }}">
                @error('year')
                    <div class="invalid-feedback">{{ $message ?: 'Tahun wajib diisi' }}</div>
                @enderror
            </div>

            {{-- Penulis --}}
            <div class="mb-3">
                <label for="author" class="form-label">Penulis</label>
                <input type="text" name="author" class="form-control @error('author') is-invalid @enderror"
                    value="{{ old('author') }}">
                @error('author')
                    <div class="invalid-feedback">{{ $message ?: 'Penulis wajib diisi' }}</div>
                @enderror
            </div>
            {{-- Penerbit --}}
            <div class="mb-3">
                <label for="author" class="form-label">Penerbit</label>
                <input type="text" name="author" class="form-control @error('author') is-invalid @enderror"
                    value="{{ old('author') }}">
                @error('author')
                    <div class="invalid-feedback">{{ $message ?: 'Penulis wajib diisi' }}</div>
                @enderror
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message ?: 'Deskripsi wajib diisi' }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($errors->any())
        <script>
            Swal.fire({
                title: 'Validasi Gagal!',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                icon: 'error',
                confirmButtonText: 'Oke',
                confirmButtonColor: '#d33'
            });
        </script>
    @endif
@endsection
