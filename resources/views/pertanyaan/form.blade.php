@extends('adminlte.master')

@section('content')


<div class="container bg-white">
    <div class="card-body">
        <h3>Form Pertanyaan</h3>
        <form action="/pertanyaan" method="POST" class="was-validated">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Pertanyaan:</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="isi">Pertanyaan:</label>
                <input type="text" class="form-control" id="isi" placeholder="Masukkan Pertanyaan" name="isi" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection