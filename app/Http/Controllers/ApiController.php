<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index()
    {
        $konten = DB::table('konten')->get();
        return response()->json([
            "message" => "Get Konten",
            "status" => "Success",
            "data" => $konten,
        ]);
    }
}
