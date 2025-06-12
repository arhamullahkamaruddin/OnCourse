<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['instructor_id', 'title', 'description', 'price'];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'course_id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'orders', 'course_id', 'student_id')
            ->join('transactions', 'orders.id', '=', 'transactions.order_id')
            ->where('transactions.status', 'berhasil')
            ->select('users.*');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function averageRating()
    {
        return $this->reviews()->avg('rating');
    }
}
