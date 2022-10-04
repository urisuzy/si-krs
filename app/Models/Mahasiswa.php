<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Mahasiswa extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nama',
        'password',
        'jenis_kelamin',
        'angkatan',
        'tgl_lahir',
        'no_hp',
        'email',
        'program_studi',
        'fakultas'
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
