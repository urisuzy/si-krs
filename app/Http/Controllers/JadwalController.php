<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function list(Request $request)
    {
        $jadwal = Jadwal::with(['matakuliah', 'ruang', 'dosen'])->where('user_id', $request->cookie('id'))->get();

        return view('jadwal', ['jadwals' => $jadwal]);
    }
}
