<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        if ($request->role == 'admin') {
            return redirect('/mahasiswa')->withCookies([
                cookie('role', 'admin', 600),
                cookie('id', 0, 0)
            ]);
        } else {
            return redirect('/mahasiswa')->withCookies([
                cookie('role', 'mahasiswa', 600),
                cookie('id', $request->id, 600)
            ]);
        }
    }
}
