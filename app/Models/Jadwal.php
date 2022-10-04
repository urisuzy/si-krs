<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal_kuliah';
    protected $fillable = [
        'user_id',
        'dosen_id',
        'matakuliah_id',
        'ruang_id',
        'hari',
        'mulai',
        'selesai'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
