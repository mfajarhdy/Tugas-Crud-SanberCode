@extends('main.master')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-8">
            <h1 class="mt-3">Form Ubah Pertanyaan</h1>

            <form method="post" action="/pertanyaan/{{ $pertanyaan_id->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" 
                    placeholder="Masukkan Judul" name="judul" value="{{ $pertanyaan_id->judul }}">
                </div>
                <div class="form-group">
                    <label for="isi">Pertanyaan</label>
                    <input type="text" class="form-control" id="isi" 
                    placeholder="Masukkan Pertanyaan" name="isi"  value="{{ $pertanyaan_id->isi }}">
                </div>
                <!-- <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" 
                    placeholder="Masukkan email" name="email" value="{{ $pertanyaan_id->email }}">
                </div> -->
                <div class="form-group">
                    <label for="tgl_diperbaharui">Tanggal</label>
                    <input type="date" class="form-control" id="tgl_diperbaharui" 
                     name="tgl_diperbaharui" value="{{ $pertanyaan_id->tgl_diperbaharui }}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data !</button>
            </form>
          </div>
      </div>
  </div>
@endsection 