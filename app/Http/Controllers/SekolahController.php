<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('admin.daftar_sekolah', [
            'title' => 'Dashboard | Daftar Sekolah',
            'data_sekolah' => Sekolah::with('kecamatan')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_sekolah', [
            'title' => 'Dashboard | Tambah Sekolah',
            'data_kecamatan' => Kecamatan::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->file('image')->move(public_path('img'), $request->file('image')->getClientOriginalName());
        Sekolah::create([
            'nama' => $request->nama_sekolah,
            'kecamatan_id' => $request->kecamatan,
            'status' => $request->status,
            'image' => $request->file('image')->getClientOriginalName()
        ]);

        return redirect()->route('sekolah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.update_sekolah', [
            'title' => 'Dashboard | Update Wisata',
            'data_sekolah' => Sekolah::find($id),
            'data_kecamatan' => Kecamatan::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sekolah' => ['required'],
            'kecamatan' => ['required'],
            'status' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $request->file('image')->move(public_path('img'), $request->file('image')->getClientOriginalName());
            unlink(public_path('img/' . $request->oldImage));
        }
        
        Sekolah::where('id', $id)->update([
            'nama' => $request->nama_sekolah,
            'kecamatan_id' => $request->kecamatan,
            'status' => $request->status,
            'image' => $request->hasFile('image') ? $request->file('image')->getClientOriginalName() : $request->oldImage
        ]);
        
        return redirect()->route('sekolah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Sekolah::destroy($id);
        return redirect()->route('sekolah.index');
    }
}
