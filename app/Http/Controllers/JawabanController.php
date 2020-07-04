<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pertanyaan_id)
    {
        // dd($pertanyaan_id);
        $jawabans = Jawaban::where('pertanyaan_id', $pertanyaan_id)->get();
        $pertanyaans = Pertanyaan::findOrFail($pertanyaan_id);

        return view('jawaban.index', [
            'title' => "Lihat Jawaban",
            'jawaban'   => $jawabans,
            'pertanyaan'    => $pertanyaans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pertanyaan_id)
    {
        $pertanyaans = Pertanyaan::where("id", $pertanyaan_id)->first();
        return view('jawaban.create', [
            'title' => "Jawab Pertanyaan",
            'pertanyaan' => $pertanyaans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pertanyaan_id)
    {
        $jawaban = Jawaban::create([
            'isi_jawaban' => $request->jawaban,
            'pertanyaan_id' => $pertanyaan_id
        ]);

        return redirect('/pertanyaan');
    }
}
