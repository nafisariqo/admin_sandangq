<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\History;

class HistoryController extends Controller
{
    public function index()
    {
        $ds = History::latest()->get();
        return view('dashboard.historyAdmin', compact('ds'));

        // $konten = DB::table('konten')->get();
        // return view('dashboard.konten', ['konten' => $konten ]);
    }

    public function create()
    {
       return view('create_history');
    }

    public function save(Request $request)
    {
        $nm = $request->image;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension(); 

        $dtUpload = new History;
        $dtUpload->image = $namaFile;
        $dtUpload->penjelasan = $request->penjelasan;

        $nm->move(public_path().'/img', $namaFile);
        $dtUpload->save();

        return redirect('historyAdmin');
    }
}
