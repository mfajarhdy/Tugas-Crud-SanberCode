@extends('main.master')

@section('content')
<a href="/pertanyaan/create" class="btn btn-info my-3 ml-2">Tambah Pertanyaan </a></button>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Pertanyaan</th>
          <th>Show </th>
        </tr>
      </thead>
      <tbody>
      @foreach($rows as $key => $row)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $row->judul }}</td>
          <td>{{ $row->isi }}</td>
          
          <td><a href="/pertanyaan/{{$row->id}}"> 
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
          </svg> 
          </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>


@endsection