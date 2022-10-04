<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function list()
    {
        $matakuliah = Matakuliah::all();

        return view('matakuliah', ['matakuliah' => $matakuliah]);
    }

    public function add(Request $request)
    {
        $user = Matakuliah::create($request->toArray());

        return redirect('/matakuliah');
    }

    public function delete($id)
    {
        Matakuliah::where('id', $id)->delete();

        return redirect('/matakuliah');
    }
}
