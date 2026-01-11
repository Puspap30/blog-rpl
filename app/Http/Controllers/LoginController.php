<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function formLogin()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $admin = DB::table('admins')
            ->where('username', $request->username)
            ->where('password', $request->password)
            ->first();

        if ($admin) {
            Session::put('admin_login', true);
            Session::put('admin_username', $admin->username);
            return redirect('/materi');
        }

        return back()->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}
