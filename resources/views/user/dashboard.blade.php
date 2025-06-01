@extends('user.master')

@section('content')
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3">
                @if (Auth::user()->role === 'admin')
                    <h4>Admin Dashboard</h4>
                @elseif (Auth::user()->role === 'instructor')
                    <h4>Instruktur Dashboard</h4>
                @elseif (Auth::user()->role === 'student')
                    <h4>Student Dashboard</h4>
                @endif
            </div>
            <div class="row">
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Welcome Back, {{ Auth::user()->name }}</h4>
                                        @if (Auth::user()->role === 'admin')
                                            <p class="mb-0">Dashboard Dashboard</p>
                                        @elseif (Auth::user()->role === 'instructor')
                                            <p class="mb-0">Instruktur Dashboard</p>
                                            @elseif (Auth::user()->role === 'student')
                                            <p class="mb-0">Student Dashboard</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="{{ asset('admin-template') }}/image/customer-support.jpg" alt="" class="img-fluid illustration-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-item-start">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">
                                        $ 23.00
                                    </h4>
                                    <p class="mb-2">
                                        Total Earnings
                                    </p>
                                    <div class="mb-0">
                                        <span class="badge text-success me-2">
                                            +4.0%
                                        </span>
                                        <span class="text-muted">
                                            Since Last Month
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
