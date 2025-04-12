@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Buku</h1>
        <form method="POST" action="{{ route('books.update', $book->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input type="number" name="year" class="form-control" value="{{ $book->year }}" required>
            </div>
            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control" rows="4" required>{{ $book->description }}</textarea>
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
