@extends('layout.main')

@section('content')
    @livewire('home')

    @if (session()->has('success'))
        <div class=" notif p-4 bg-green-400 flex text-white  top-0 z-10 fixed w-full justify-between">
            <span>{{ session('success') }}</span>
            <button onclick="CloseNotif()" class="close-btn text-black font-bold text-[18px] px-[3rem] max-md:px-[2rem]">X</button>
        </div>
    @endif
    
        <script>
            const Notif = document.querySelector('.notif')
            const Close = document.querySelector('.close-btn')
           

            // document.addEventListener('DOMContentLoaded', () => {
            //   const element = document.querySelector('.active')
            //   const addActive = (window.location.hash === '#rekomendasi') ? 'text-blue-500' : 'text-black'
            //   element.classList.add(addActive)
              
            // })
            // function notif close
            const CloseNotif = () => {
                Notif.style.display = 'none'
            }

            // function read more
            const readMore = (element) => {

            const parent = element.parentElement;
            const longText = parent.querySelector(".long-text");
            const readMoreLink = parent.querySelector(".read-more-link");

            if (longText.classList.contains("line-clamp-5")) {
                longText.classList.remove("line-clamp-5");
                readMoreLink.textContent = "Read Less";
            } else {
                longText.classList.add("line-clamp-5");
                readMoreLink.textContent = "Read More";
            }
            }

            const typed = new Typed('.baca', {
            strings: ['Baca Buku', 'Rajin Membaca'],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
            });

        </script>
@endsection
