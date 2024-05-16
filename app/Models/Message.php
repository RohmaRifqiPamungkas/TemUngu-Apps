<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['pengaduan_id', 'content'];
    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
