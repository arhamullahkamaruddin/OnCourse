@extends('user.master')

@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <h5>Transaksi Saya</h5>

        @forelse ($transactions as $transaction)
            <div class="card mb-3">
                <div class="card-body">
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
                </div>
            </div>
        @empty
            <p>Belum ada transaksi.</p>
        @endforelse
    </div>
</main>
@endsection
