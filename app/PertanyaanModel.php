<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PertanyaanModel extends Model
{
    public static function get_all_pertanyaan(){
    	$pertanyaan = DB::table('pertanyaan')->get();
    	return $pertanyaan;
    }

    public static function savepertanyaan($data){
    	$new_pertanyaan = DB::table('pertanyaan')->insert($data);
    	return $new_pertanyaan;
    }
}
