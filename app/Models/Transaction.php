<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'student_name',
        'payment_proof',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function course()
    {
        return $this->hasOneThrough(Course::class, Order::class, 'id', 'id', 'order_id', 'course_id');
    }

    public function student()
    {
        return $this->hasOneThrough(User::class, Order::class, 'id', 'id', 'order_id', 'student_id');
    }

}
