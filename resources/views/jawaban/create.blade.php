@extends('main.master')

@section('content')
<div class="ml-4 mt-2">
<form action="/jawaban" method="post">
    @csrf
        <div class="form-group">
            <label for="isi">Jawaban</label>
            <input class="form-control" type="text" name="isi" id="isi">
        </div>
        <input type="hidden" name="tgl_dibuat" value="<?= date("Y-m-d"); ?>">
        <input type="hidden" name="tgl_diperbaharui" value="<?= date("Y-m-d"); ?>">
        <input type="hidden" name="pertanyaan_id" value="{{ $id }}" required>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection