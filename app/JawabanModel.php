<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class JawabanModel extends Model
{
    public static function get_all_jawaban($id){
    	$jawaban = DB::table('jawaban')->where('pertanyaan_id',$id)->get();
    	return $jawaban;
    }

    public static function savejawaban($data, $id){
    	$data["pertanyaan_id"] = $id;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();

    	$new_data = DB::table('jawaban')->insert($data);

    	return $new_data;

    	// $new_jawaban = DB::table('jawaban')->insert($data);
    	// return $new_jawaban;
    }
}
