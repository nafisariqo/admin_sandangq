<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use lluminate\Support\Facades\Storage;
use App\Volunteer;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataVolunteer = Volunteer::latest()->get();
        return view('dashboard.volunteer', compact('dataVolunteer'));
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
        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension(); 

            $dtUpload = new Volunteer;
            $dtUpload->gambar = $namaFile;
            $dtUpload->nama = $request->nama;

            $nm->move(public_path().'/img', $namaFile);
            $dtUpload->save();

            return redirect('volunteer');
        
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
        $dt = Volunteer::findorfail($id);
        return view('dashboard.edit_volunteer', compact('dt'));
    }

    public function update(Request $request, $id){  

        $ubah = Volunteer::findorfail($id);
        $awal = $ubah->gambar;

        $dt = [
            'gambar' => $awal,
            'nama' => $request['nama'],
        ];

        $request->gambar->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('volunteer');
    }
}
