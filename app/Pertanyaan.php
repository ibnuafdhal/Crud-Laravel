<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table ='pertanyaans';

    protected $fillable = ['judul', 'isi_pertanyaan'];
    protected $pertanyaans = ['created_at', 'updated_at'];

    
}
