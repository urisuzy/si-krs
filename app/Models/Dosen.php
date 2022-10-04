<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'program_studi',
        'fakultas',
        'email',
        'pendidikan',
        'tgl_lahir',
        'no_hp'
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
