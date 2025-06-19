<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
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
    // Authentication Routes End
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin Routes Start
Route::middleware('auth', 'admin')->group(function () {
    Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/view-manage-account', [UserController::class, 'viewUser'])->name('admin.manage-account');
    Route::post('/admin/reset-password/{id}', [UserController::class, 'resetPassword'])->name('admin.reset-password');
    Route::post('/admin/add-user', [UserController::class, 'addUser'])->name('admin.add-user');
    Route::post('/admin/delete-user/{id}', [UserController::class, 'deleteUser'])->name('admin.delete-user');
    Route::get('/admin/transactions', [TransactionController::class, 'index'])->name('admin.transactions');
    Route::post('/admin/transactions/{id}/confirm', [TransactionController::class, 'confirm'])->name('admin.transactions.confirm');
    Route::post('/admin/transactions/{id}/reject', [TransactionController::class, 'reject'])->name('admin.transactions.reject');
});
// Admin Routes End

// Instructor Routes Start
Route::middleware('auth', 'instructor')->group(function () {
    Route::get('/instructor/dashboard', [UserController::class, 'instructorDashboard'])->name('instructor.dashboard');
    Route::get('/instructor/my-course', [CourseController::class, 'viewCourse'])->name('instructor.my-course');
    Route::get('/instructor/create-course', [CourseController::class, 'createCourse'])->name('instructor.create-course');
    Route::post('/instructor/store-course', [CourseController::class, 'storeCourse'])->name('instructor.store-course');
    Route::get('/instructor/view-course', [CourseController::class, 'viewCourse'])->name('instructor.view-course');
    Route::match(['get', 'post'], '/instructor/edit-course/{id}', [CourseController::class, 'editCourse'])->name('instructor.edit-course');
    Route::post('/instructor/delete-course/{id}', [CourseController::class, 'deleteCourse'])->name('instructor.delete-course');
    Route::get('/instructor/course-detail{id}', [CourseController::class, 'courseDetail'])->name('instructor.course-detail');
    Route::post('/instructor/courses/{id}', [LessonController::class, 'store'])->name('instructor.lessons.store');
    Route::post('/instructor/course/{id}/lesson', [LessonController::class, 'store'])->name('instructor.lessons.store');
    Route::get('/instructor/course/{id}/detail', [CourseController::class, 'courseDetail'])->name('instructor.review');
});
// Instructor Routes End

// Student Routes Start
Route::middleware('auth', 'student')->group(function () {
    Route::get('/student/dashboard', [UserController::class, 'studentDashboard'])->name('student.dashboard');
    Route::get('/student/search-course', [CourseController::class, 'viewAllCourse'])->name('student.search-course');
    Route::get('/student/buy-course/{id}', [OrderController::class, 'create'])->name('student.buy-course');
    Route::post('/student/buy-course', [OrderController::class, 'store'])->name('student.buy-course.store');
    Route::get('/student/my-courses', [CourseController::class, 'studentCourses'])->name('student.my-course');
    Route::get('/student/my-transactions', [TransactionController::class, 'myTransactions'])->name('student.transactions');
    Route::get('/student/course-detail/{id}', [CourseController::class, 'detailCourse'])->name('student.course-detail');
    Route::post('/student/course-review/{id}', [CourseController::class, 'submitReview'])->name('student.review');
});
// Student Routes End
