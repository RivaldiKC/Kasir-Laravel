<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class DashboardBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('catatan', [
            'title' => 'Catatan',
            'barangs' => Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create', [
            'title' => 'Tambah Data Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama' => 'required',
            'stok' => 'required'
        ]);

        $barang = new Barang();
        $barang->nama = $request->input('nama');
        $barang->stok = $request->input('stok');
        $barang->save();
      
        return redirect('/dashboard')->with('success','Data baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang, $id)
    {
        return view ('edit', [
            'title' => 'Edit',
            'barangs' => Barang::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required'
        ]);

        $barang = Barang::find($id);
        $barang->nama = $request->input('nama');
        $barang->stok = $request->input('stok');
        $barang->save();
      
        return redirect('/dashboard')->with('success','Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/dashboard')->with('success','Data berhasil dihapus');
    }
}
