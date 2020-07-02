<?php

namespace App\Http\Controllers;
// use DB;
use Illuminate\Http\Request;
use App\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index()
    {
    	$row_pertanyaan = PertanyaanModel::get_all_pertanyaan();
    	// dd($row_pertanyaan);
    	return view('pertanyaan', compact('row_pertanyaan'));
    	
    }
    public function create()
    {
        
    	return view('pertanyaancreate');
    }
    public function store(Request $request){
    	$data = $request->all();
    	unset($data["_token"]);
    	$dtpertanyaan = PertanyaanModel::savepertanyaan($data);
}
