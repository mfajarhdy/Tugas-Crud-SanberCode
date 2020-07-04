@extends('main.master')

@section('content')


<a href="/pertanyaan" class="btn btn-primary my-3 ml-2">Kembali </a></button>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Pertanyaan</th>
          <th>Tanggal Dibuat</th>
          <th>Tanggal Diperbaharui</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{ $rows->judul }}</td>
            <td>{{ $rows->isi }}</td>
            <td>{{ $rows->tgl_dibuat }}</td>
            <td>{{ $rows->tgl_diperbaharui }}</td>
            <td>
            <a href="{{ $rows->id }}/edit" class="btn btn-primary">Edit</a>       
            <form action="{{ $rows->id}}" method="post" class="display d-inline">  
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
            
        </tr>
      </tbody>
    </table>

    <a href="/jawaban/create/{{$rows->id}}" class="ml-2 mb-2 btn btn-info"> Add Jawaban </a>
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