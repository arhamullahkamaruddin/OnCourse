@extends('user.master')

@section('content')
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <h3>{{ $course->title }}</h3>
            <p>{{ $course->description }}</p>
            <p class="fw-bold">Rp{{ number_format($course->price, 0, ',', '.') }}</p>

            @if ($hasAccess)
                <h5>Materi Kursus:</h5>
                @forelse ($course->lessons as $lesson)
                    <div class="mb-3">
                        <p><strong>{{ $lesson->title }}</strong></p>
                        <a href="{{ asset('storage/' . $lesson->file) }}" target="_blank">Download Materi</a>
                    </div>
                @empty
                    <p>Belum ada materi.</p>
                @endforelse
            @else
                <div class="alert alert-warning mt-4">
                    <p>Untuk melihat materi, silakan beli kursus ini terlebih dahulu.</p>
                    <a href="{{ route('student.buy-course', $course->id) }}" class="btn btn-primary btn-sm">Beli Kursus</a>
                </div>
            @endif

            <hr>
            <h6>Ulasan Kursus</h6>

            @foreach ($course->reviews as $review)
                <div class="border rounded p-2 mb-2">
                    <strong>{{ $review->student->name }}</strong>
                    <div>Rating: {{ $review->rating }}/5</div>
                    <p>{{ $review->comment }}</p>
                </div>
            @endforeach

            @if (auth()->check() && auth()->user()->isStudent())
                @php
                    $hasBought =
                        $course->orders->where('student_id', auth()->id())->first()?->transaction?->status ===
                        'berhasil';
                    $hasReviewed = $course->reviews->where('student_id', auth()->id())->isNotEmpty();
                @endphp

                @if ($hasBought && !$hasReviewed)
                    <hr>
                    <form action="{{ route('student.review', $course->id) }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="rating">Rating (1-5)</label>
                            <input type="number" name="rating" min="1" max="5" class="form-control"
                                required>
                        </div>
                        <div class="mb-2">
                            <label for="comment">Komentar</label>
                            <textarea name="comment" class="form-control" required></textarea>
                        </div>
                        <button class="btn btn-primary">Kirim Ulasan</button>
                    </form>
                @endif
            @endif
        </div>
    </main>
@endsection
