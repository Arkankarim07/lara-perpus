<div class="sticky top-[6rem] bg-slate-200 px-[2rem]  rounded-md ">
    <h1 class=" mb-[1rem]  text-2xl font-bold">Dashboard</h1>
    
    <ul class="grid place-content-center font-bold gap-5">
        <li class="pl-3 pr-8  py-4  rounded-md flex items-center bg-blue-950 text-white">
            <ion-icon name="book-outline" class=" mr-2"></ion-icon>
            <a href="{{ route('admin.index') }}">Peminjaman Buku</a></li>

        <li class="px-2 py-1 rounded-md flex items-center">
            <ion-icon name="list-outline" class=" mr-2"></ion-icon>
            <a href="{{ route('admin.buku') }}">Daftar Buku</a></li>
            

        <li class="px-2 py-1 rounded-md flex items-center">
            <ion-icon name="copy-outline" class=" mr-2"></ion-icon>
            <a href="">Tambah Kategori</a></li>


        <li class="px-2 py-1 rounded-md flex items-center">
            <ion-icon name="people-outline" class=" mr-2"></ion-icon>
            <a href="">Anggota</a></li>


        <li class="px-2 py-1 rounded-md flex items-center">
            <ion-icon name="alert-circle-outline" class=" mr-2"></ion-icon>
            <a href="">Laporan</a></li>

            
        <li class="px-2 py-1 rounded-md flex items-center">
            <ion-icon name="settings-sharp" class=" mr-2"></ion-icon>
            <a href="">Settings</a></li>
    </ul>
</div>