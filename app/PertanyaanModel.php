<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class PertanyaanModel extends Model
{
    public static function get_all_pertanyaan(){
    	$pertanyaan = DB::table('pertanyaan')->get();
    	return $pertanyaan;
    }

    public static function save_pertanyaan($data){
    	$data['created_at'] = Carbon::now();
    	$data['updated_at'] = Carbon::now();
    	$new_pertanyaan = DB::table('pertanyaan')->insert($data);
    	return $new_pertanyaan;
    }

    public static function get_pertanyaan_by_id($id){
    	$pertanyaan = DB::table('pertanyaan')->where('id',$id)->get();
    	return $pertanyaan;
    }

    public static function update_pertanyaan($id, $request){
    	$pertanyaan = DB::table('pertanyaan')
    					->where('id', $id)
    					->update([
    						'judul' => $request['judul'],
    						'isi' => $request['isi'],
    						'updated_at' => Carbon::now()
    					]);
    	return $pertanyaan;
    }

    public static function delete_pertanyaan($id){
    	$pertanyaan = DB::table('pertanyaan')
    					->where('id', $id)
    					->delete();
    	return $pertanyaan;
    }
}
