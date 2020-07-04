@extends('adminlte.master')
@section('content')


<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <p class="font-weight-bold"> Pertanyaan : </p>
      {{$pertanyaan->isi_pertanyaan}}
    </div>
    <ul class="list-group">
      <li class="list-group-item font-weight-bold">Daftar Jawaban :</li>
      @foreach($jawaban as $data)
      <ol class="list-group-items">{{ $data->isi_jawaban}}</ol>
      @endforeach
    </ul>
  </div>
</div>

@endsection