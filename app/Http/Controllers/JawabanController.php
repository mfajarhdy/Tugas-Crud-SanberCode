<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pertanyaan;
use App\jawaban;

class JawabanController extends Controller
{
    public function create($id)
    {
        return view('jawaban.create', compact('id'));
    }

    public function store(Request $request)
    {
        $coba = jawaban::create($request->all());
        return redirect('/pertanyaan');
    }
}
