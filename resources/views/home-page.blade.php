@extends('layout.main')

@section('content')
    @livewire('home')

    @if (session()->has('success'))
        <div class=" notif p-4 bg-green-400 flex text-white absolute top-0 w-full justify-between">
            <span>{{ session('success') }}</span>
            <button onclick="CloseNotif()" class="close-btn text-black font-bold text-[18px] px-[3rem] max-md:px-[2rem]">X</button>
        </div>
    @endif
    
        <script>
            const Notif = document.querySelector('.notif')
            const Close = document.querySelector('.close-btn')

            const CloseNotif = () => {
                Notif.style.display = 'none'
            }
        </script>
@endsection
