<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Ruang;
use Illuminate\Http\Request;

class KRSController extends Controller
{
    public function list(Request $request)
    {
        $matakuliah = Matakuliah::all();

        $ruang = Ruang::all();

        return view('krs', ['matakuliah' => $matakuliah, 'ruang' => $ruang]);
    }

    public function ambil(Request $request)
    {
        $cache = Helper::cacheKRS($request->matakuliah_id);
        $dosen = Matakuliah::find($request->matakuliah_id);
        Jadwal::create([
            ...$request->toArray(),
            'dosen_id' => $dosen->dosen_id,
            'hari' => $cache['hari'],
            'mulai' => $cache['jam'][0],
            'selesai' => $cache['jam'][1],
        ]);
        return redirect('/krs');
    }
}
