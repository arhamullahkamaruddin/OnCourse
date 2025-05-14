<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisputeFile extends Model
{
    use HasFactory;

    protected $fillable = ['dispute_id', 'file_path'];

    public function dispute() {
        return $this->belongsTo(Dispute::class);
    }
}
