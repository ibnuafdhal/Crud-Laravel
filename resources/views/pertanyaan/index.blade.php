@extends('adminlte.master')

@section('content')
<div class="container">
    <div class="card-body">
        <a href="/pertanyaan/create" class="btn btn-primary">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Pertanyaan</th>
                    <th scope="col">Judul Pertanyaan</th>
                    <th scope="col">Pertanyaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pertanyaans as $key => $p)

                <tr>
                    <td> {{ $key+1 }} </td>
                    <td> {{ $p->pertanyaan_id }} </td>
                    <td class="font-weight-bold text-success"> {{ $p->judul }} </td>
                    <td> {{ $p->isi }} </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection