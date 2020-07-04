<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawabans';

    protected $fillable = ['isi_jawaban', 'pertanyaan_id'];
}
