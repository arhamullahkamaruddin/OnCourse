<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        try {
            DB::transaction(function () use ($id) {
                $transaction = Transaction::findOrFail($id);
                $transaction->status = 'berhasil';
                $transaction->save();
            });

            return back()->with('success', 'Pembayaran dikonfirmasi.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal konfirmasi pembayaran: ' . $e->getMessage());
        }
    }

    public function reject($id)
    {
        try {
            DB::transaction(function () use ($id) {
                $transaction = Transaction::findOrFail($id);
                $transaction->status = 'ditolak';
                $transaction->save();
            });

            return back()->with('error', 'Pembayaran ditolak.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menolak pembayaran: ' . $e->getMessage());
        }
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
