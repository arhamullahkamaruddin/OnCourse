@extends('user.master')

@section('content')
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <h5>Detail Kursus: {{ $course->title }}</h5>

            <p>{{ $course->description }}</p>
            <p><strong>Harga:</strong> Rp{{ number_format($course->price, 0, ',', '.') }}</p>

            <hr>

            <h6>Materi Kursus</h6>
            @forelse ($course->lessons as $lesson)
                <div class="mb-2">
                    <strong>{{ $lesson->title }}</strong><br>
                    <a href="{{ asset('storage/' . $lesson->file) }}" target="_blank"
                        class="btn btn-sm btn-outline-primary mt-1">Lihat / Download</a>
                </div>
            @empty
                <p>Belum ada materi ditambahkan.</p>
            @endforelse

            <hr>

            @if (auth()->id() === $course->instructor_id)
                <h6>Tambah Materi</h6>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('instructor.lessons.store', $course->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Materi</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Upload File Materi</label>
                        <input type="file" name="file" class="form-control" required>
                        <small class="text-muted">Format: PDF, MP4, AVI, DOCX. Maks 10MB</small>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan Materi</button>
                </form>
            @endif
            @if ($course->students->count() > 0)
                <h6 class="mt-4">Siswa yang Mengambil Kursus Ini:</h6>
                <ul class="list-group mb-3">
                    @foreach ($course->students as $student)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $student->name }}
                            <span class="badge bg-primary">{{ $student->email }}</span>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="alert alert-info">Belum ada siswa yang membeli kursus ini.</div>
            @endif

            <hr>
            <h6>Ulasan dari Siswa</h6>
            <p>Rata-rata Rating: {{ number_format($course->averageRating(), 1) }} / 5</p>
            @forelse ($course->reviews as $review)
                <div class="border p-2 rounded mb-2">
                    <strong>{{ $review->student->name }}</strong>
                    <small class="text-muted">{{ $review->created_at->format('d M Y') }}</small>
                    <br>
                    Rating: {{ $review->rating }} / 5
                    <p>{{ $review->comment }}</p>
                </div>
            @empty
                <p>Belum ada ulasan.</p>
            @endforelse
        </div>
    </main>
@endsection
