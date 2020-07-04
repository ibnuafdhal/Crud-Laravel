<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $pertanyaans = DB::table('pertanyaans')->get();
        return $pertanyaans;
    }

    public static function save($data)
    {
        unset($data["_token"]);
        unset($data["pertanyaan_id"]);
        $new_pertanyaans = DB::table('pertanyaans')->insert($data);
        return $new_pertanyaans;
    }
}
