<nav class="bg-[#FDE74C] w-full flex justify-between items-center p-3 fixed z-[3]  ">
    <span class="font-bold text-2xl">Perpus</span>

    <div class="block lg:hidden">
        <ion-icon name="menu-outline" size="large" class="menu"></ion-icon>
    </div>
    <ul class="flex gap-[2rem] items-center max-md:hidden ">
        <li class="font-bold  hover:text-blue-500 transition-all">
            <a href="/home" class="{{ Request::is('home') ? 'text-blue-500' : 'text-black'  }}" >Home</a>
        </li>
        <li class="font-bold hover:text-blue-500 transition-all">
            <a href="/peminjaman" class="{{ Request::is('peminjaman') ? 'text-blue-500' : 'text-black'  }}">Peminjaman</a>
        </li>
        <li class="font-bold hover:text-blue-500 transition-all">
            <a href="#tes" class="active">Buku</a>
        </li>
        @livewire('auth.logout')
    </ul>
    <ul id="navbar-mobile" class=" transition-all translate-x-full  lg:hidden gap-[2rem] absolute bg-white top-[60px] justify-center font-bold  right-0 w-1/2 h-screen items-center flex-col  ">
        <li class="hover:bg-slate-200 transition-all w-full text-center p-3">
            <a href="/home" class="{{ Request::is('home') ? 'text-blue-500' : 'text-black'  }}">Home</a>
        </li>
        <li class="hover:bg-slate-200 transition-all w-full text-center p-3">
            <a href="/peminjaman" class="{{ Request::is('peminjaman') ? 'text-blue-500' : 'text-black'  }}">Peminjaman</a>
        </li>
        <li class="hover:bg-slate-200 transition-all w-full text-center p-3">
            <a href="" class="{{ Request::is('') ? 'text-blue-500' : 'text-black'  }}">Buku</a>
        </li>
    </ul>

    
</nav>

<script>
     const Menu  = document.querySelector('.menu')
            const Nav = document.getElementById('navbar-mobile')

            // NAVBAR
            Menu.addEventListener('click', () => {
                Nav.classList.toggle('translate-x-full')
            })
</script>