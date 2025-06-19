<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function viewCourse()
    {
        $courses = Course::where('instructor_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();
        return view('user.instructor.my-courses', compact('courses'));
    }

    public function createCourse()
    {
        return view('user.instructor.create-courses');
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        Course::create([
            'instructor_id' => $request->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('instructor.my-course')->with('success', 'Kursus Berhasil Dibuat!.');
    }

    public function editCourse(Request $request)
    {
        $course = Course::findOrFail($request->id);
        if ($request->isMethod('post')) {
            $course->title = $request->title;
            $course->description = $request->description;
            $course->price = $request->price;
            $course->save();
            return redirect()->route('instructor.my-course');
        }
        return view('user.instructor.edit-courses', compact('course'));
    }

    public function deleteCourse(Request $request)
    {
        $course = Course::findOrFail($request->id);
        $course->delete();
        return redirect()->route('instructor.my-course')->with('success', 'Kursus Berhasil Dihapus!.');
    }

    public function viewAllCourse()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();
        return view('user.student.search-courses', compact('courses'));
    }

    public function courseDetail($id)
    {
        $course = Course::with('lessons', 'students')->findOrFail($id);

        $course = Course::with(['lessons', 'reviews'])->findOrFail($id);

        if (Auth::user()->id !== $course->instructor_id) {
            abort(403);
        }

        return view('user.instructor.course-detail', compact('course'));
    }

    public function studentCourses()
    {
        $courses = Auth::user()->purchasedCourses;
        return view('user.student.my-courses', compact('courses'));
    }

    public function detailCourse($id)
    {
        $course = Course::with('lessons')->findOrFail($id);
        $user = Auth::user();

        $hasAccess = false;

        if ($user && $user->role === 'student') {
            $order = Order::where('student_id', $user->id)
                ->where('course_id', $id)
                ->first();

            if ($order && $order->transaction && $order->transaction->status === 'berhasil') {
                $hasAccess = true;
            }
        }

        return view('user.student.course-detail', compact('course', 'hasAccess'));
    }

    public function submitReview(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        $user = Auth::user();
        $course = Course::findOrFail($id);

        $existing = Review::where('course_id', $id)
            ->where('student_id', $user->id)
            ->first();

        $order = Order::where('course_id', $id)
            ->where('student_id', $user->id)
            ->first();

        if (!$order || !$order->transaction || $order->transaction->status !== 'berhasil') {
            return redirect()->back()->with('error', 'Kamu belum membeli kursus ini.');
        }

        if ($existing) {
            return redirect()->back()->with('error', 'Kamu sudah mengulas kursus ini.');
        }

        Review::create([
            'course_id' => $id,
            'student_id' => $user->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Ulasan berhasil dikirim!');
    }
}
