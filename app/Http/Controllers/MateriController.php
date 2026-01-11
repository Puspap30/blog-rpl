<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MateriController extends Controller
{
    
    public function index()
    {
        if (!Session::get('admin_login')) {
            return redirect('/login');
        }

        $materi = Materi::all();
        return view('materi.index', compact('materi'));
    }


    public function create()
    {
        if (!Session::get('admin_login')) {
            return redirect('/login');
        }

        return view('materi.create');
    }

    public function store(Request $request)
    {
        Materi::create([
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'isi'   => $request->isi
        ]);

        return redirect('/materi');
    }
}



