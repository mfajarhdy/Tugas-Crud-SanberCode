@extends('main.master')

@section('content')


<a href="/pertanyaan" class="btn btn-primary my-3 ml-2">Kembali </a></button>

<table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Jawaban</th>
          <th>Tanggal Dibuat</th>
          <th>Tanggal Diperbaharui</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($rows->jawaban as $key => $row)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $row->isi }}</td>
            <td>{{ $row->tgl_dibuat }}</td>
            <td>{{ $row->tgl_diperbaharui }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

@endsection