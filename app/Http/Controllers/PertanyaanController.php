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

    public function show($pertanyaan_id)
    {   
        $rows = pertanyaan::find($pertanyaan_id);
        return view('pertanyaan.show',compact('rows'));
    }

    public function edit(pertanyaan $pertanyaan_id)
    {
        return view('pertanyaan.edit', compact('pertanyaan_id'));
    }

    public function update(Request $request, pertanyaan $pertanyaan_id)
    {
        pertanyaan::where('id', $pertanyaan_id->id)
                ->update([
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                    'tgl_diperbaharui' => $request->tgl_diperbaharui
                ]);
            return redirect('/pertanyaan');
    }

    public function destroy(pertanyaan $pertanyaan_id)
    {
        
        pertanyaan::destroy($pertanyaan_id->id);
        
        return redirect('/pertanyaan'); 
    }
}
