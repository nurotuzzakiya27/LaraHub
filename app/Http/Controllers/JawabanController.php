<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JawabanModel;

class JawabanController extends Controller
{
    public function index($id)
    {
        $data = JawabanModel::get_all_jawaban($id);
        $row_jawaban = $id;
        // dd($row_jawaban);
        return view('jawabancreate', compact('data','row_jawaban'));
    }
    public function create()
    {
        return view('pertanyaan');
    }
    public function store(Request $request, $id)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($id);
        $insert = JawabanModel::savejawaban($data, $id);
        
        if($insert) {
            return redirect()->back();
        }
    }
}
