<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KRSController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\RuangController;
use App\Http\Middleware\EnsureIdExist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/norole', function () {
    return view('norole');
});

Route::get('/role', [AuthController::class, 'auth']);

Route::get('/mahasiswa', [MahasiswaController::class, 'list']);
Route::post('/mahasiswa', [MahasiswaController::class, 'add']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'delete']);
Route::get('/tambah-mahasiswa', function () {
    return view('tambah-mahasiswa');
});

Route::middleware([EnsureIdExist::class])->group(function () {


    Route::get('/login', function () {
        return view('login');
    });

    Route::post('/login', function (Request $request) {
        $token = $request->user()->createToken($request->token_name);

        return ['token' => $token->plainTextToken];
    });

    Route::get('/jadwal', [JadwalController::class, 'list']);

    Route::get('/matakuliah', function () {
        return view('matakuliah');
    });

    Route::get('/dosen', [DosenController::class, 'list']);
    Route::post('/dosen', [DosenController::class, 'add']);
    Route::get('/dosen/{id}', [DosenController::class, 'delete']);
    Route::get('/tambah-dosen', function () {
        return view('tambah-dosen');
    });

    Route::get('/matakuliah', [MatakuliahController::class, 'list']);
    Route::post('/matakuliah', [MatakuliahController::class, 'add']);
    Route::get('/matakuliah/{id}', [MatakuliahController::class, 'delete']);
    Route::get('/tambah-matakuliah', function () {
        return view('tambah-matakuliah');
    });

    Route::get('/ruang', [RuangController::class, 'list']);
    Route::post('/ruang', [RuangController::class, 'add']);
    Route::get('/ruang/{id}', [RuangController::class, 'delete']);
    Route::get('/tambah-ruang', function () {
        return view('tambah-ruang');
    });

    Route::get('/krs', [KRSController::class, 'list']);
    Route::get('/krs/ambil', [KRSController::class, 'ambil']);

    Route::post('/tokens/create', function (Request $request) {
        $token = $request->user()->createToken($request->token_name);

        return ['token' => $token->plainTextToken];
    });
});
