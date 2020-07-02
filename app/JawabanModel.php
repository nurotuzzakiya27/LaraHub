<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class JawabanModel extends Model
{
    public static function get_all_jawaban(){
    	$jawaban = DB::table('jawaban')->get();
    	return $jawaban;
    }

    public static function savejawaban($data, $id){
    	$data["pertanyaan_id"] = $id;

    	$new_data = DB::table('jawaban')->insert($data);

    	return $new_data;

    	// $new_jawaban = DB::table('jawaban')->insert($data);
    	// return $new_jawaban;
    }
}
