<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\History;

class HistoryUserController extends Controller
{
    public function index()
    {
     $hs = History::all();
      return view('user.history', compact('hs'));
      
    }
}
