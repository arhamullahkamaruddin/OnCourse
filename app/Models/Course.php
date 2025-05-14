<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['instructor_id', 'title', 'description', 'price'];

    public function instructor() {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
