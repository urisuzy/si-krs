<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $fillable = [
        'dosen_id',
        'kode',
        'nama',
        'sks',
        'jenis'
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
