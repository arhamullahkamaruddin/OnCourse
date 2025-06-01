<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // User Routes Start
    Route::get('/', function () {
        return view('guest.home');
    })->name('home');

    Route::get('/course', function () {
        return view('guest.course');
    })->name('course');

    Route::get('/about', function () {
        return view('guest.about');
    })->name('about');

    Route::get('/contact', function () {
        return view('guest.contact');
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
    Route::get('/admin/disputes', [PageController::class, 'adminDisputes'])->name('admin.disputes');
    Route::get('/admin/manage-accounts', [PageController::class, 'adminManageAccounts'])->name('admin.manage-accounts');
    Route::get('/admin/manage-courses', [PageController::class, 'adminManageCourses'])->name('admin.manage-courses');
    Route::get('/admin/refunds', [PageController::class, 'adminRefunds'])->name('admin.refunds');
    Route::get('/admin/transactions', [PageController::class, 'adminTransactions'])->name('admin.transactions');
});
// Admin Routes End

// Instructor Routes Start
Route::middleware('auth', 'instructor')->group(function () {
    Route::get('/instructor/dashboard', [UserController::class, 'instructorDashboard'])->name('instructor.dashboard');
    Route::get('/instructor/disputes', [PageController::class, 'instructorDisputes'])->name('instructor.disputes');
    Route::get('/instructor/manage-lessons', [PageController::class, 'instructorManageLessons'])->name('instructor.manage-lessons');
    Route::get('/instructor/my-courses', [PageController::class, 'instructorMyCourses'])->name('instructor.my-courses');
    Route::get('/instructor/my-students', [PageController::class, 'instructorMyStudents'])->name('instructor.my-students');
    Route::get('/instructor/payments', [PageController::class, 'instructorPayments'])->name('instructor.payments');
});
// Instructor Routes End

// Student Routes Start
Route::middleware('auth', 'student')->group(function () {
    Route::get('/student/dashboard', [UserController::class, 'studentDashboard'])->name('student.dashboard');
    Route::get('/student/disputes', [PageController::class, 'studentDisputes'])->name('student.disputes');
    Route::get('/student/my-courses', [PageController::class, 'studentMyCourses'])->name('student.my-courses');
    Route::get('/student/reviews', [PageController::class, 'studentReviews'])->name('student.reviews');
    Route::get('/student/search-courses', [PageController::class, 'studentSearchCourses'])->name('student.search-courses');
    Route::get('/student/transactions', [PageController::class, 'studentTransactions'])->name('student.transactions');
});
// Student Routes End
