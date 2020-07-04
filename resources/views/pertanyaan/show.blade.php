@extends('adminlte.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="ml-3 mt3">
            <h3>Detail Pertanyaan : </h3>
            <table class="table table-bordered">
                <tr>
                    <td class="font-weight-bold">Judul Pertanyaan</td>
                    <td>:</td>
                    <td>{{ $pertanyaans->judul }} </td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Isi Pertanyaan</td>
                    <td>:</td>
                    <td>{{ $pertanyaans->isi_pertanyaan }} </td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Tanggal Di Buat</td>
                    <td>:</td>
                    <td>{{\Carbon\Carbon::parse($pertanyaans->created_at)->format('d F Y/H:i')}}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Tanggal Di Edit</td>
                    <td>:</td>
                    <td>{{\Carbon\Carbon::parse($pertanyaans->updated_at)->format('d F Y/H:i')}} </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="ml-3 mt-3">
            <h4>Daftar Jawaban</h4>
            <!--  -->
        </div>
    </div>
</div>
@endsection