<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $jawabans = DB::table('jawabans')->get();
        return $jawabans;
    }

    public static function save($data){
        $new_jawabans = DB::table('jawabans')->insert($data);
        return $new_jawabans;
    }

    public static function find_by_id($pertanyaan_id){
        $jawabans = DB::table('jawabans')->where('pertanyaan_id', $pertanyaan_id)->get();
        return $jawabans;
    }
}
