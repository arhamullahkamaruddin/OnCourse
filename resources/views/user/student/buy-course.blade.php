@extends('user.master')

@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <h5>Beli Kursus: {{ $course->title }}</h5>
            <form method="POST" action="{{ route('student.buy-course.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="course_id" value="{{ $course->id }}">

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <p class="text-success fw-bold">Rp{{ number_format($course->price, 0, ',', '.') }}</p>
            </div>

            <div class="mb-3">
                <label for="payment_proof" class="form-label">Upload Bukti Pembayaran</label>
                <input type="file" name="payment_proof" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Kirim Bukti</button>
        </form>
    </div>
</main>
@endsection
