@extends('adminlte.master')

@section('content')

<div class="container bg-white">
    <div class="card-body">
        <h3>Edit Pertanyaan</h3>
        <form action="/pertanyaan/{{$pertanyaans->id}}" method="POST" class="was-validated">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul Pertanyaan:</label>
                <input type="text" class="form-control" id="judul" value="{{$pertanyaans->judul}}" placeholder="Masukkan Judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="isi">Pertanyaan:</label>
                <input type="text" class="form-control" id="isi" value="{{$pertanyaans->isi_pertanyaan}}" placeholder="Masukkan Pertanyaan" name="isi" required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>

@endsection