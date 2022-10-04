<?php

namespace App\Helpers;

use App\Models\Jadwal;
use App\Models\Ruang;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class Helper
{
  public static function getNameById($id)
  {
    $user = User::find($id);
    return $user->nama ?? 'Admin';
  }

  public static function randomRuang()
  {
    $ruang = Ruang::inRandomOrder()->first();
    return $ruang;
  }

  public static function randomJam()
  {
    $arr = [
      ['10:00', '11:00'],
      ['11:00', '12:00'],
      ['12:00', '13:00'],
      ['13:00', '14:00'],
      ['14:00', '15:00']
    ];

    return $arr[array_rand($arr)];
  }

  public static function randomHari()
  {
    $arr = [
      'Senin',
      'Selasa',
      'Rabu',
      'Kamis',
      'Jumat'
    ];

    return $arr[array_rand($arr)];
  }

  public static function cacheKRS($id)
  {
    $cache = Cache::rememberForever('krs' . $id, function () {
      return [
        'ruang' => Helper::randomRuang(),
        'jam' => Helper::randomJam(),
        'hari' => Helper::randomHari()
      ];
    });
    return $cache;
  }

  public static function checkKrsAvailable($matakuliahId, $mahasiswaId)
  {
    $jadwal = Jadwal::where('matakuliah_id', $matakuliahId)->where('user_id', $mahasiswaId)->first();

    return !$jadwal ? true : false;
  }

  public static function countPeserta($matakuliahId)
  {
    return Jadwal::where('matakuliah_id', $matakuliahId)->count();
  }
}
