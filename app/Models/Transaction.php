<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'instructor_id', 'amount', 'status', 'released_at'];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function instructor() {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}
