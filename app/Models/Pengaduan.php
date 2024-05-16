<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = "pengaduan";
    protected $primaryKey = 'id';

    protected $fillable = [
        'nim_mahasiswa',
        'nama_mahasiswa',
        'id_jurusan',
        'tanggal_penemuan',
        'no_telepon',
        'foto_barang',
        'status_pengaduan',
        'unique_code',
        'user_id', // tambahkan kolom user_id untuk relasi
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
