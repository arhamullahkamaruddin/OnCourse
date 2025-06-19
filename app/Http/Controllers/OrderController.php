<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create($id)
    {
        $course = Course::findOrFail($id);
        return view('user.student.buy-course', compact('course'));
    }

    public function store(Request $request)
{
    $request->validate([
        'course_id' => 'required|exists:courses,id',
        'payment_proof' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    try {
        DB::transaction(function () use ($request) {
            $image = $request->file('payment_proof')->store('payment_proof', 'public');

            $order = Order::create([
                'course_id' => $request->course_id,
                'student_id' => Auth::id(),
            ]);

            Transaction::create([
                'order_id' => $order->id,
                'student_name' => Auth::user()->name,
                'status' => 'menunggu',
                'payment_proof' => $image,
            ]);
        });

        return redirect()->route('student.transactions')->with('success', 'Pembelian berhasil, menunggu konfirmasi admin.');
    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menyimpan transaksi: ' . $e->getMessage());
    }
}

}
