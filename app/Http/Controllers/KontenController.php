<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konten = DB::table('konten')->get();
        return view('dashboard.konten', ['konten' => $konten ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create_konten');
    }

    public function save(Request $request)
    {
      DB::insert('insert into konten (title, description) values (?, ?)', [$request->title, $request->description]);
      return redirect()->route('konten'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       
        // $Konten::where(['id'=> $id])->delete();
        // return redirect()->back()->with('flash_message_success', 'Delete success');
        DB::table('konten')->where('id', $id)->delete();
        return redirect('konten')->with('status', 'Delete success');
    }
    
    public function edit($id){
        $konten = DB::table('konten')->where('id', $id)->first();
        return view('edit_konten', ['konten' => 'konten']);
    }
}
