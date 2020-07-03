<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $rows = pertanyaan::get_all();
        return view('pertanyaan.index', compact('rows'));
    }

    public function create()
    {
        return view('pertanyaan.form');
    }

    public function store(Request $request)
    {       
        $coba = pertanyaan::create($request->all());
        return redirect('/pertanyaan');
    }
}
