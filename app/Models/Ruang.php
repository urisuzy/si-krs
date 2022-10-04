<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    protected $table = 'ruang_kuliah';
    protected $fillable = [
        'nomor',
        'gedung'
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
