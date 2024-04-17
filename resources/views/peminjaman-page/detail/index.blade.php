@extends('layout.main')
@section('content')

<style>
    body{
        background-color: rgb(226 232 240);
    }
</style>
<div class="flex  justify-center items-center pt-[6rem] w-full">
    <div class="mr-[2rem] relative">
        <a href="/peminjaman" class="absolute top-[-8rem]"><ion-icon name="chevron-back-circle-outline" class="text-3xl"></ion-icon></a>
    </div>
    <form action="/peminjaman" method="POST" class=" flex bg-white flex-col w-[300px] p-4">
        @csrf
        <label for="" class="text-md font-bold">Username</label>
        <p>{{ Auth::user()->name }}</p>
        <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">

        <label for="" class="text-md font-bold">Buku</label>
        <p>{{ $buku->judul }}</p>
        <input type="hidden" name="buku_id" value="{{ $buku->id }}" readonly>

        <label for="" class="text-md font-bold">Pengarang</label>
        <input type="text" name="penulis" placeholder="{{ $buku->penulis }}">

        <label for="" class="text-md font-bold">tanggal peminjaman</label>
        <input type="date" name="tgl_pinjam" value="{{date('Y-m-d')}}">

        <label for="" class="text-md font-bold">tanggal pengembalian</label>
        <input type="date" name="tgl_kembali">

        <button type="submit" class="bg-[#5BC0EB] font-bold rounded-md p-1">Confirm</button>

    </form>
</div>
@endSection