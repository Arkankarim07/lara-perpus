<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date'
        ]);

        Peminjaman::create($validate);

        return redirect()->to('/peminjaman');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::find($id);
        
        return view('peminjaman-page.detail.index', [
            'buku' => $buku,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $delete = Peminjaman::findorfail($id);

        $delete->update([
            'status' => 'cancel',
        ]);

        $delete->delete();

        return redirect()->to('/admin');
        
    }
}
