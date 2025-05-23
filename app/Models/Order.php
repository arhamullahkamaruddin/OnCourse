<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'course_id', 'amount', 'status'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function transaction() {
        return $this->hasOne(Transaction::class);
    }

    public function dispute() {
        return $this->hasOne(Dispute::class);
    }
}
