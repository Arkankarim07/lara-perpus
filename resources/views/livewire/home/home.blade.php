<div>
    <section class="main">
        <div class="flex flex-col w-full justify-center items-center">
            <h1 class="max-md:text-3xl tracking-normal text-4xl font-bold text-center pt-[6rem]">Selamat Datang Di Library <br>
                Kami</h1>
                
                <img src="img/main.png" width="500px" alt="" class=" mt-[3rem] z-[2]">
                {{-- <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class=" w-[400px] z-[1] top-5 absolute h-[670px]">
                    <path fill="#eec643" d="M35.3,-37.2C48.6,-30.8,64.2,-22.5,67.5,-10.9C70.8,0.7,61.6,15.5,53,30.8C44.4,46.2,36.4,62.1,24.7,65.1C13,68.2,-2.3,58.4,-14,49.4C-25.8,40.4,-33.8,32.3,-45.3,21.7C-56.7,11.1,-71.5,-2.1,-72.8,-15.9C-74,-29.8,-61.8,-44.4,-47.4,-50.6C-33,-56.7,-16.5,-54.5,-2.8,-51.2C11,-47.9,21.9,-43.5,35.3,-37.2Z" transform="translate(100 100)" />
                </svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute max-sm:bottom-[5rem] -bottom-[4.5rem]" viewBox="0 0 1440 320"><path fill="#141414" fill-opacity="1" d="M0,160L34.3,149.3C68.6,139,137,117,206,117.3C274.3,117,343,139,411,154.7C480,171,549,181,617,154.7C685.7,128,754,64,823,80C891.4,96,960,192,1029,213.3C1097.1,235,1166,181,1234,160C1302.9,139,1371,149,1406,154.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            
        </section>
        <section id="rekomendasi">
            <div class="pt-[6rem] h-[800px] w-full  bg-[#141414] ">
                <h1 class="text-center text-3xl text-white font-bold mb-4">Rekomendasi Buku</h1>
                <div class="flex justify-center items-center flex-wrap mb-[8rem] gap-4">
                    
                    @for ($i = 0; $i <= 2; $i++)    
                    
                <div class=" flex h-[18rem] bg-white rounded-md px-6 py-7 justify-center items-center ">
                    <img src="img/buku.jpg" alt="" class="max-w-40 max-h-40">
                    <div class="flex flex-col">
                        <h1 class="text-2xl w-52 font-bold">{{ $books[$i]->judul }}</h1>
                        <p class="text-sm w-40  text-start line-clamp-5 long-text">{{ $books[$i]->sinopsis }}  </p>
                        <a class="mb-5 text-blue-400 read-more-link"  onclick="readMore(this)">Read More</a>
                        <button class="bg-[#5BC0EB] font-bold rounded-md p-1 ">Pinjam</button>
                    </div>
                </div>
                    @endfor
                    
                </div>
                <div class="flex justify-center ">
                    <button class="rounded-md flex items-center bg-[#fde74c] px-10 py-4 font-bold">Selengkapnya <ion-icon name="arrow-forward-circle-outline" class="ml-2" size="large"></ion-icon></button>
                </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#141414" fill-opacity="1" d="M0,64L34.3,90.7C68.6,117,137,171,206,181.3C274.3,192,343,160,411,133.3C480,107,549,85,617,74.7C685.7,64,754,64,823,90.7C891.4,117,960,171,1029,208C1097.1,245,1166,267,1234,250.7C1302.9,235,1371,181,1406,154.7L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
            </section>

            <section>
                <div class="pt-[6rem] h-[800px] w-full  bg-white ">
                    <h1 class="text-center text-6xl font-bold text-black">AYO <br> <span  class="baca text-[#FDE74C]"></span> </h1>

                    <div class="pt-[3rem] px-[3rem] flex justify-around items-center ">
                        <div class="w-[50%]">
                            <h1 class="text-3xl font-bold">Dengan <span class="text-[#FDE74C]">MEMBACA</span> buku, kamu akan terinspirasi.<h1>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, ratione, porro minus ipsam, nihil cupiditate dolores aperiam unde magni veritatis suscipit. Ea dolores soluta totam aut neque, dolor repellendus necessitatibus.</p>
                            <button class="bg-[#5BC0EB] font-bold rounded-md px-5 py-2">Pinjam</button>
                        </div>

                        <img src="img/lemari.jpg" alt="" class="w-[300px] rounded-md">

                    </div>
                </div>
            </section>

            <section>
                <div class=" pt-[3rem] relative  w-full text-white bg-black ">
                    <div class="grid grid-cols-3 max-md:flex max-md:flex-col  ">
                        <span class="text-2xl max-md:text-3xl font-bold text-[#FDE74C] max-md:text-center">PERPUS</span>
                        <div>
                            <h1 class="text-2xl font-bold">Service</h1>
                            <ul>
                                <li>Contact Us</li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h1 class="text-2xl font-bold">Company</h1>
                            <p>SMKN 40 JAKARTA</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4925609367697!2d106.8667726745309!3d-6.198559560723265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f53b62b87f89%3A0xe6905bddd860349b!2sSMK%20Negeri%2040%20Jakarta!5e0!3m2!1sid!2sid!4v1711547244369!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="mt-[3rem] flex justify-between items-center p-[2rem] bg-[#141414]">
                        <h1 class="text-center text-2xl font-bold text-[#FDE74C]">Copyright © 2019 - 2021. SMKN 40 Jakarta</h1>

                        <div class="text-[30px]">
                            <ion-icon name="logo-facebook"></ion-icon>
                            <ion-icon name="logo-instagram"></ion-icon>
                            <ion-icon name="logo-tiktok"></ion-icon>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
