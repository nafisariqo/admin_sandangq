<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Konten;
use App\Volunteer;
use App\Sk;
// use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $response = Http::get('http://127.0.0.1:8000/api/konten')->json();
      // $data = $response['data'];
      // dd($data);
      // return view('user.home', compact('data'));

      $khome['konten'] = Konten::all();
      $khome['volunteer'] = Volunteer::all();
      $khome['sk'] = Sk::all();
      return view('user.home', compact('khome'));
      // dd($khome);
    }


    
}
