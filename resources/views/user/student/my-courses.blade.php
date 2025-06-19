@extends('user.master')

@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <h5>Kursus Saya</h5>
        <div class="row">
            @forelse ($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                            <p class="card-text fw-bold text-success">
                                Rp{{ number_format($course->price, 0, ',', '.') }}
                            </p>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('student.course-detail', $course->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Belum ada kursus yang dibeli.</p>
            @endforelse
            
        </div>
    </div>
</main>
@endsection
