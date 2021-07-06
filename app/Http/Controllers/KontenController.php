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
        $request->validate([
            'gmbr' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
         ]);
  
          if ($request->file('gmbr')) {
            $imagePath = $request->file('gmbr');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('gmbr')->storeAs('img', $imageName, 'public');
  
            $imagePath->move(base_path('\public\img'), $imageName);
            DB::insert('insert into konten (gmbr, title, description) values (?, ?, ?)', [$path, $request->title, $request->description]);
            return redirect()->route('konten'); 
          }
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
        DB::table('konten')->where('id_konten', $id)->delete();
        return redirect('konten')->with('status', 'Delete success');
    }
    
    public function edit($id){
        $konten = DB::table('konten')->where('id_konten', $id)->first();
        return view('dashboard.edit_konten', ['konten' => $konten]);
    }

    public function update(Request $request, $id){
        DB::table('konten')->where('id_konten', $id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('konten')->with('status', 'Update success');
    }
}
