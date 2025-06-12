<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['order.course', 'order.student'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user.admin.transactions', compact('transactions'));
    }

    public function confirm($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 'berhasil';
        $transaction->save();

        return back()->with('success', 'Pembayaran dikonfirmasi.');
    }

    public function reject($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 'ditolak';
        $transaction->save();

        return back()->with('error', 'Pembayaran ditolak.');
    }

    public function myTransactions()
    {
        $student = Auth::user();

        $transactions = Transaction::whereHas('order', function ($query) use ($student) {
            $query->where('student_id', $student->id);
        })->with('order.course')->latest()->get();

        return view('user.student.transactions', compact('transactions'));
    }
}
