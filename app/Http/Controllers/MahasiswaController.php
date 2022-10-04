<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function list()
    {
        $mahasiswa = User::all();

        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function add(Request $request)
    {
        $user = User::create($request->toArray());

        return redirect('/mahasiswa');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();

        return redirect('/mahasiswa');
    }
}
