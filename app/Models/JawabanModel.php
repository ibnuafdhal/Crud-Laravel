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
}
