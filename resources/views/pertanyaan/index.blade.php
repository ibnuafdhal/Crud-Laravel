@extends('adminlte.master')
@section('content')
<div class="card">
  <div class="card-header">
    <h4>Daftar Pertanyaan</h4>
    <a href="pertanyaan/create" class="btn btn-primary">Buat Pertanyaan</a>
  </div>

  <div class="card-body">
    <table id="datatable" class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Isi Pertanyaan</th>
          <th>Tanggal dibuat</th>
          <th>Tanggal diedit</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pertanyaans as $p)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$p->judul }}</td>
          <td>{{$p->isi_pertanyaan }}</td>
          <td>{{$p->created_at->format('d F Y/H:i')}}</td>
          <td>{{$p->updated_at->format('d F Y/H:i')}}</td>
          <td>
            <div class="d-flex justify-content-center">
              <a href="{{url('jawaban/'.$p->id.'/jawab')}}" class="btn btn-primary">Jawab Pertanyaan</a>
              <a href="{{url('jawaban/'.$p->id)}}" class="btn btn-success">Semua Jawaban</a>
              <a href="/pertanyaan/{{$p->id}}" class="btn btn-info">Detail</a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection