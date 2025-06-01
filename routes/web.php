<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // User Routes Start
    Route::get('/', function () {
        return view('user.home');
    })->name('home');

    Route::get('/course', function () {
        return view('user.course');
    })->name('course');

    Route::get('/about', function () {
        return view('user.about');
    })->name('about');

    Route::get('/contact', function () {
        return view('user.contact');
    })->name('contact');
    // User Routes End

    // Authentication Routes Start
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register/submit', [AuthController::class, 'submitRegister'])->name('register.submit');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/account', [UserController::class, 'account'])->name('account');
// Authentication Routes End

// Admin Routes Start
Route::middleware('auth', 'admin')->group(function () {
    Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');
});
// Admin Routes End

// Instructor Routes Start
Route::middleware('auth', 'instructor')->group(function () {
    Route::get('/instructor/dashboard', [UserController::class, 'instructorDashboard'])->name('instructor.dashboard');
});
// Instructor Routes End

// Student Routes Start
Route::middleware('auth', 'student')->group(function () {
    Route::get('student/dashboard', [UserController::class, 'studentDashboard'])->name('student.dashboard');
});
// Student Routes End
