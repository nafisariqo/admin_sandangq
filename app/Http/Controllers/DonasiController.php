<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dtDonasi = Donasi::with('konten')->paginate(10);
        $donasi = DB::table('donasi')->get();
        return view('dashboard.donasi', ['donasi' => $donasi ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('donasi');
    }

    public function save(Request $request){

    // $validation = $request->validate([
    //   'resi' => 'required|max:20|min:11'
    // ]);

    
      DB::insert('insert into donasi (news, name, phone, address, resi) values (?, ?, ?, ?, ?)', [$request->news, $request->name,$request->phone, $request->address, $request->resi,]);
      return view('home');
    }

    public function saveDonasiUser(Request $request){

        // $validation = $request->validate([
        //   'resi' => 'required|max:20|min:11'
        // ]);
    
        
          DB::insert('insert into donasi (name, phone, address, id_konten, resi) values (?, ?, ?, ?, ?)', [$request->name, $request->phone, $request->address, $request->news, $request->resi,]);
          return view('user.home');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id_donasi)
    {
       
        DB::table('donasi')->where('id_donasi', $id_donasi)->delete();
        return redirect('donasi')->with('status', 'Delete success');
    }
    
    // public function edit($id){
    //     $konten = DB::table('konten')->where('id', $id)->first();
    //     return view('dashboard.edit_konten', ['konten' => $konten]);
    // }

    // public function update(Request $request, $id){
    //     DB::table('konten')->where('id', $id)->update([
    //         'title' => $request->title,
    //         'description' => $request->description
    //     ]);
    //     return redirect('konten')->with('status', 'Update success');
    // }
}
