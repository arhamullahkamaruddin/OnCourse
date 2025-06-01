<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Admin Pages
    function adminDashboard()
    {
        return view('user.dashboard');
    }
    function adminDisputes()
    {
        return view('user.admin.disputes');
    }
    function adminManageAccounts()
    {
        return view('user.admin.manage-accounts');
    }
    function adminManageCourses()
    {
        return view('user.admin.manage-courses');
    }
    function adminRefunds()
    {
        return view('user.admin.refunds');
    }
    function adminTransactions()
    {
        return view('user.admin.transactions');
    }

    // Instructor Pages
    function instructorDashboard()
    {
        return view('user.dashboard');
    }
    function instructorDisputes()
    {
        return view('user.instructor.disputes');
    }
    function instructorManageLessons()
    {
        return view('user.instructor.manage-lessons');
    }
    function instructorMyCourses()
    {
        return view('user.instructor.my-courses');
    }
    function instructorMyStudents()
    {
        return view('user.instructor.my-students');
    }
    function instructorPayments()
    {
        return view('user.instructor.payments');
    }

    // Student Pages
    function studentDashboard()
    {
        return view('user.dashboard');
    }
    function studentDisputes()
    {
        return view('user.student.disputes');
    }
    function studentMyCourses()
    {
        return view('user.student.my-courses');
    }
    function studentReviews()
    {
        return view('user.student.reviews');
    }
    function studentSearchCourses()
    {
        return view('user.student.search-courses');
    }
    function studentTransactions()
    {
        return view('user.student.transactions');
    }
}
