<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Konten;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKonten = Konten::latest()->get();
        return view('dashboard.konten', compact('dataKonten'));

        // $konten = DB::table('konten')->get();
        // return view('dashboard.konten', ['konten' => $konten ]);
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
        $nm = $request->gmbr;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension(); 

            $dtUpload = new Konten;
            $dtUpload->gmbr = $namaFile;
            $dtUpload->title = $request->title;
            $dtUpload->description = $request->description;

            $nm->move(public_path().'/img', $namaFile);
            $dtUpload->save();

            return redirect('konten');

        // $request->validate([
        //     'gmbr' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        //  ]);
  
        //   if ($request->file('gmbr')) {
        //     $imagePath = $request->file('gmbr');
        //     $imageName = $imagePath->getClientOriginalName();

        //     $path = $request->file('gmbr')->storeAs('img', $imageName, 'public');
  
        //     $imagePath->move(base_path('\public\img'), $imageName);
        //     DB::insert('insert into konten (gmbr, title, description) values (?, ?, ?)', [$path, $request->title, $request->description]);
        //     return redirect()->route('konten'); 
        //   }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id_konten)
    {
        $hapus = Konten::findorfail($id_konten);

        $file = public_path('/img/').$hapus->gmbr;
        
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back();

        // DB::table('konten')->where('id_konten', $id_konten)->delete();
        // return redirect('konten')->with('status', 'Delete success');
    }
    
    public function edit($id_konten){

        $dt = Konten::findorfail($id_konten);
        return view('dashboard.edit_konten', compact('dt'));

        // $konten = DB::table('konten')->where('id_konten', $id_konten)->first();
        // return view('dashboard.edit_konten', ['konten' => $konten]);
    }

    public function update(Request $request, $id_konten){

        $ganti = Konten::findorfail($id_konten);
        $pertama = $ganti->gmbr;

        $dt = [
            'gmbr' => $pertama,
            'title' => $request['title'],
            'description' => $request['description'],
        ];

        $request->gmbr->move(public_path().'/img', $pertama);
        $ganti->update($dt);
        return redirect('konten');




    }
}
