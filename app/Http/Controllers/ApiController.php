<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    // public function konten(Request $request)
    // {
    //     if ($request->id) {
    //         $results = DB::table('konten')->where('id_konten', $request->id)->get();
    //     } else {
    //         $results = DB::table('konten')->get();
    //     }

    //     if ($results->count()) {
    //         return response()->json([
    //             "message" => "Success",
    //             "status" => true,
    //             "total" => $results->count(),
    //             "data" => $results,
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             "message" => "Failed",
    //             "status" => false,
    //             "total" => 0,
    //             "data" => "Data Not Found",
    //         ], 400);
    //     }
    // }


}
