<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;


class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaans = PertanyaanModel::get_all();
        //dd($pertanyaans);
        return view('pertanyaan.index', compact('pertanyaans'));
    }

    public function create()
    {
        return view('pertanyaan.form');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $new_pertanyaans = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');
    }
}
