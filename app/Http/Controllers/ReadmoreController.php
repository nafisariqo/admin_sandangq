<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konten;
use App\Sk;

class ReadmoreController extends Controller
{
    public function index(Request $request, $id_konten)
    {
        $item['konten'] = Konten::where('id_konten', $id_konten)->get();
        $item['sk'] = Sk::all();
        return view('user.readmore', compact('item'));
       
    }
}
