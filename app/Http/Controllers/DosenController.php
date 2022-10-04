<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function list()
    {
        $dosen = Dosen::all();

        return view('dosen', ['dosen' => $dosen]);
    }

    public function add(Request $request)
    {
        $user = Dosen::create($request->toArray());

        return redirect('/dosen');
    }

    public function delete($id)
    {
        Dosen::where('id', $id)->delete();

        return redirect('/dosen');
    }
}
