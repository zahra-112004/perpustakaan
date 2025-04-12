@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Detail Buku</h1>

        <div class="card">
            <div class="card-header">
                Informasi Buku
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong>Judul:</strong> {{ $book->title }}</h5>
                <p><strong>Penulis:</strong> {{ $book->author }}</p>
                <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
                <p><strong>Deskripsi:</strong></p>
                <p>{{ $book->description }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('books.index') }}" class="btn btn-secondary">←Kembali ke Daftar Buku</a>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;"
                class="delete-form">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                const form = this.closest('form');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data buku akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
