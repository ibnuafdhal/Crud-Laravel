@extends('adminlte.master')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{url('jawaban/'.$pertanyaan->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" readonly value="{{$pertanyaan->isi_pertanyaan}}">
                </div>
                <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <input type="text" class="form-control" id="jawaban" name="jawaban" value="{{old('jawaban')}}" placeholder="Masukkan Jawaban">
                </div>
                <button type="submit" class="btn btn-primary">Simpan jawaban</button>
            </form>
        </div>
    </div>
</div>

@endsection