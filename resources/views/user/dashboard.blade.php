@extends('user.master')

@section('content')
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3">
                @if (Auth::user()->role === 'admin')
                    <h4>Dashboard Admin</h4>
                @elseif (Auth::user()->role === 'instructor')
                    <h4>Dashboard Instruktur</h4>
                @elseif (Auth::user()->role === 'student')
                    <h4>Dashboard Siswa</h4>
                @endif
            </div>
            <div class="row">
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Selamat Datang, {{ Auth::user()->name }}</h4>
                                        @if (Auth::user()->role === 'admin')
                                            <p class="mb-0">Dashboard Admin</p>
                                        @elseif (Auth::user()->role === 'instructor')
                                            <p class="mb-0">Dashboard Instruktur</p>
                                            @elseif (Auth::user()->role === 'student')
                                            <p class="mb-0">Dashboard Siswa</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="{{ asset('user-template') }}/image/customer-support.jpg" alt="" class="img-fluid illustration-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
