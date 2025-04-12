@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Buku</h1>

        {{-- Tombol Kembali ke Home dan Tambah --}}
        <div class="mb-3 d-flex justify-content-between">
            <a href="{{ route('home') }}" class="btn btn-secondary">🏠 Kembali ke Home</a>
            <a href="{{ route('books.create') }}" class="btn btn-success">+ Tambah Buku</a>
        </div>

        {{-- Daftar Buku --}}
        <div class="card">
            <div class="card-header">Daftar Buku</div>
            <div class="card-body">
                @if ($books->count())
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tahun</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $index => $book)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->year }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>
                                        <a href="{{ route('books.show', $book->id) }}"
                                            class="btn btn-primary btn-sm">Lihat</a>

                                        <a href="{{ route('books.edit', $book->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>

                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Tidak ada buku yang tersedia.</p>
                @endif
            </div>
        </div>
    </div>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

@endsection
