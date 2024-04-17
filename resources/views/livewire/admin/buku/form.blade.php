@extends('layout.main')
@section('content')

<style>
    body{
        background-color: rgb(226 232 240);
    }
</style>
<div class="flex  justify-center items-center pt-[6rem] w-full">
    <div class="mr-[2rem] relative">
        <a href="/admin/buku" class="absolute top-[-8rem]"><ion-icon name="chevron-back-circle-outline" class="text-3xl"></ion-icon></a>
    </div>
    <form action="{{ route('admin.tambah-buku') }}" enctype="multipart/form-data" method="POST" class=" flex bg-white flex-col w-[300px] p-4">
        @csrf
        <label for="" class="text-md font-bold">Judul</label>
        <input type="text"  name="judul">

        <label for="" class="text-md font-bold">Sinopsis</label>
        <input type="text" name="sinopsis">
        
        <label for="" class="text-md font-bold">Masukkan Gambar</label>
        <input type="file" name="img">


        <label for="" class="text-md font-bold">Penulis</label>
        <input type="text" name="penulis" placeholder="">

        <label for="" class="text-md font-bold">Penerbit</label>
        <input type="text" name="penerbit" placeholder="">

        <label for="" class="text-md font-bold">stok</label>
        <input type="number" name="stok" placeholder="">

        <label for="" class="text-md font-bold">tanggal Terbit</label>
        <input type="date" name="tgl_terbit">

        <button type="submit" class="bg-[#5BC0EB] font-bold rounded-md p-1">Confirm</button>

    </form>
</div>
@endSection