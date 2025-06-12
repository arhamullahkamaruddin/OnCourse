@extends('user.master')

@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <h5>Daftar Transaksi</h5>

        @foreach ($transactions as $transaction)
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>Nama Siswa:</strong> {{ $transaction->order->student->name }}</p>
                    <p><strong>Kursus:</strong> {{ $transaction->order->course->title }}</p>
                    <p><strong>Status:</strong>
                        <span class="badge
                            @if($transaction->status == 'berhasil') bg-success
                            @elseif($transaction->status == 'ditolak') bg-danger
                            @else bg-warning text-dark @endif">
                            {{ ucfirst($transaction->status) }}
                        </span>
                    </p>
                    <p><strong>Bukti Pembayaran:</strong><br>
                        <img src="{{ asset('storage/' . $transaction->payment_proof) }}" width="200">
                    </p>

                    @if($transaction->status === 'menunggu' && Auth::user()->role === 'admin')
                        <form method="POST" action="{{ route('admin.transactions.confirm', $transaction->id) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Terima</button>
                        </form>
                        <form method="POST" action="{{ route('admin.transactions.reject', $transaction->id) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
