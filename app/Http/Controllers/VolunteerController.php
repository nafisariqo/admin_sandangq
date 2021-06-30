<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use lluminate\Support\Facades\Storage;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteer = DB::table('volunteer')->get();
        return view('dashboard.volunteer', ['volunteer' => $volunteer ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('create_volunteer');
    }

    public function save(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
         ]);
  
          if ($request->file('gambar')) {
            $imagePath = $request->file('gambar');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('gambar')->storeAs('img', $imageName, 'public');
  
            $imagePath->move(base_path('\public\img'), $imageName);
            DB::insert('insert into volunteer (gambar, nama) values (?, ?)', [$path, $request->nama]);
            return redirect()->route('volunteer'); 
          }

        // $request->validate([
        //     'gambar'=> 'mimes:jpeg,png,jpg,gif,svg|max:3024',
        //     'nama' => 'required|max:50|min:2'
        // ]);

        // $imgName = $request->gambar->getClientOriginalName() . '-' . time()
        //                                 . '.' . $request->gambar->extension();

        
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

        
        DB::table('volunteer')->where('id', $id)->delete();
        return redirect('volunteer')->with('status', 'Delete success');
    }
    
    public function edit($id){
        $volunteer = DB::table('volunteer')->where('id', $id)->first();
        return view('dashboard.edit_volunteer', ['volunteer' => $volunteer]);
    }

    public function update(Request $request, $id){
        DB::table('volunteer')->where('id', $id)->update([
            'gambar' => $request->gambar,
            'nama' => $request->nama
        ]);
        return redirect('volunteer')->with('status', 'Update success');
    }
}
