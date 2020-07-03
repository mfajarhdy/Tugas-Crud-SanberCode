@extends('main.master')

@section('content')
<a href="/pertanyaan/create" class="btn btn-primary my-3 ml-2">Tambah Pertanyaan </a></button>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Pertanyaan</th>
          <th>Jawaban</th>
        </tr>
      </thead>
      <tbody>
      @foreach($rows as $key => $row)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $row->judul }}</td>
          <td>{{ $row->isi }}</td>
          <td><a href="/jawaban/{{$row->id}}"> Lihat </a> || <a href="/jawaban/create/{{$row->id}}"> Add Jawaban </a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>


@endsection