<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanModel;
use App\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
        return view('pertanyaan.index', [
            'title' => "Pertanyaan",
            'pertanyaans'    => $pertanyaans
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.form');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pertanyaans = Pertanyaan::create([
            'judul'             => $request->judul,
            'isi_pertanyaan'    => $request->isi,
        ]);
        return redirect('/pertanyaan');
    }

    public function show($id){
        $pertanyaans = PertanyaanModel::find_by_id($id);
        //dd(date('created_at'));
        return view('pertanyaan.show', compact('pertanyaans'));
    }
}
