<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sk = DB::table('sk')->get();
        return view('dashboard.sk', ['sk' => $sk ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create_');
    }

    public function save(Request $request)
    {
            DB::insert('insert into sk (syarat, ketentuan) values (?, ?)', [$request->syarat, $request->ketentuan]);
            return redirect()->route('sk'); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('sk')->where('id', $id)->delete();
        return redirect('sk')->with('status', 'Delete success');
    }
    
    public function edit($id){

        $sk = DB::table('sk')->where('id', $id)->first();
        return view('dashboard.edit_sk', ['sk' => $sk]);
    }

    public function update(Request $request, $id){

        DB::table('sk')->where('id', $id)->update([
            'syarat' => $request->syarat,
            'ketentuan' => $request->ketentuan
        ]);
        return redirect('sk')->with('status', 'Update success');
    }
}
