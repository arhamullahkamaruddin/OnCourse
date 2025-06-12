<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isInstructor()
    {
        return $this->role === 'instructor';
    }

    public function isStudent()
    {
        return $this->role === 'student';
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'student_id');
    }

    public function purchasedCourses()
    {
        return $this->belongsToMany(Course::class, 'orders', 'student_id', 'course_id')
            ->withPivot('id')
            ->withTimestamps()
            ->whereHas('orders.transaction', function ($query) {
                $query->where('status', 'berhasil');
            });
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'student_id');
    }
}
