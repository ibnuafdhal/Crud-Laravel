@extends('adminlte.master')
@section('content')
<div class="card">
  <div class="card-header">
    <h4>Daftar Pertanyaan</h4>
    <a href="pertanyaan/create" class="btn btn-primary">Buat Pertanyaan</a>
  </div>
  <!-- @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  @if (session('error'))
  <div class="alert alert-success">
    {{ session('error') }}
  </div>
  @endif -->
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
          <td>{{$p->created_at->format('d F Y H:i')}}</td>
          <td>{{$p->updated_at->format('d F Y H:i')}}</td>
          <td>
            <div class="d-flex justify-content-center">
              <a href="{{url('jawaban/'.$p->id.'/jawab')}}" class="btn btn-primary">Jawab Pertanyaan</a>
              <a href="{{url('jawaban/'.$p->id)}}" class="btn btn-success">Semua Jawaban</a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- /.content-wrapper -->
@endsection





<!-- @push('jsDatatable') -->
<!-- DataTables -->
<!-- <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#datatable').DataTable();
  });
</script>
@endpush -->

<!-- @push('cssDatatable') -->
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

<!-- @endpush -->