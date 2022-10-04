<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function list()
    {
        $ruang = Ruang::all();

        return view('ruang', ['ruang' => $ruang]);
    }

    public function add(Request $request)
    {
        $user = Ruang::create($request->toArray());

        return redirect('/ruang');
    }

    public function delete($id)
    {
        Ruang::where('id', $id)->delete();

        return redirect('/ruang');
    }
}
