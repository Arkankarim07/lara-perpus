<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }
    
    public function formBuku() {
        return view('livewire.admin.buku.form');
        
    }

    public function tambahBuku(Request $request) {
        $validate = $request->validate([
            'judul' => 'required|max:50',
            'sinopsis' => 'required|min:20',
            'img' => 'required|mimes:jpg,jpeg,png|max:4000',
            'penulis' => 'required',
            'penerbit' => 'required',
            'stok' => 'required',
            'tgl_terbit' => 'required|date',
        ]);
        
        

        $nama_file = time() . "." . $request->img->extension();

        $request->img->move(public_path('data_img'), $nama_file);

        $validate['img'] = $nama_file; 

        Buku::create($validate);

        return redirect()->route('admin.buku')->with('success', 'Gambar berhasil diunggah.'); 
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
