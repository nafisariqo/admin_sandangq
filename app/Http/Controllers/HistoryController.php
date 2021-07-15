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
}
