@extends('user.master')

@section('content')
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <h5>Buat Kursus</h5>
            <form method="POST" action="{{ route('instructor.edit-course', $course->id) }}" class="mb-3">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Kursus</label>
                    <input type="text" name="title" class="form-control" value="{{ $course->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ $course->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga (Rp)</label>
                    <input type="number" name="price" class="form-control" step="0.01" min="0" value="{{ $course->price }}">
                </div>
                <button type="submit" class="btn btn-success" name="add" id="submitAdd">Simpan</button>
                <a href="{{ route('instructor.my-course') }}" class="btn btn-secondary" >Batal</a>
            </form>
        </div>
    </main>
@endsection
