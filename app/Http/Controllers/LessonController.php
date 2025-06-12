<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,mp4,avi,docx|max:10000',
        ]);

        $course = Course::findOrFail($id);

        if ($course->instructor_id !== $request->user()->id) {
            abort(403);
        }

        $file = $request->file('file')->store('lesson_files', 'public');

        Lesson::create([
            'course_id' => $id,
            'title' => $request->title,
            'file' => $file,
        ]);

        return redirect()->back()->with('success', 'Materi berhasil ditambahkan.');
    }
}
