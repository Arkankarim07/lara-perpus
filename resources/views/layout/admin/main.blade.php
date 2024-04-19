<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <style>
        @import url('css/home.css');
    </style>
    @vite('resources/css/app.css')
    <title>Admin</title>
</head>
<body>

    @if (session()->has('success'))
    <div class="p-4 bg-green-400 text-white absolute top-0 w-full">{{ session('success') }}</div>
    @endif    
    
    <div class="px-[2rem] pt-[6rem] grid grid-cols-5  gap-4 relative">
        <div class="col-span-1">
            @include('layout.admin.sidebar')
        </div>



        <div class="grid col-span-4 grid-rows-7">
            <div class=" row-span-6 bg-white px-[1rem] pt-[1rem] rounded-md">                
                            <div class="flex items-center gap-x-4 mb-4">
                                <div class="px-[1rem] w-[300px] rounded-full flex justify-between items-center bg-slate-300">
                                    <input type="text" placeholder="Search" class="outline-none bg-transparent">
                                    <ion-icon name="search-outline"></ion-icon>
                                </div>
                
                                @if (request()->routeIs('admin.buku'))
                                    <a href="{{ route('admin.form-buku') }}" class="bg-green-400 font-bold rounded-md p-3">Tambah Buku</a>
                                @endif
                            </div>
                @yield('content')
            </div>
        </div>
        
    </div>


    
</body>
</html>