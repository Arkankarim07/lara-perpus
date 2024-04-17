<div>
    <div class="p-[6rem] max-md:px-[1rem] flex max-md:flex-col max-md:justify-center  justify-between gap-2 w-full">
        <div class="w-[400px]  max-md:w-full  rounded-md flex flex-col justify-center items-center shadow-xl h-[200px]  px-6 py-4">
            <h1 class="text-2xl font-bold mb-4">Genre</h1>
            <ul class="grid text-center gap-3 grid-cols-4 max-md:grid-cols-3">
                <li>Action</li>
                <li>Comedy</li>
                <li>Fantasy</li>
                <li>Drama</li>

                <li>Horror</li>
                <li>Thriller</li>
                <li>Mystery</li>
                <li>Romance</li>
            </ul>
        </div>
        
        <div class="grid grid-cols-4 gap-4 max-md:grid-cols-2 place-items-center  ">      
            @foreach ($books as $book)
                
            <div class="w-[200px] max-md:w-[200px] h-[400px] gap-2 rounded-md shadow-2xl px-6 py-4 flex flex-col justify-center items-center">
                <img src="{{ asset('data_img/' .$book->img) }}" alt="" class="w-[200px] h-[200px]">
                <h1 class="text-2xl font-bold text-center">{{ $book->judul  }}</h1>
                <div>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <a href="" class="text-blue-400">Detail</a>
                <button class="bg-[#fde74c] font-bold rounded-md px-5 py-1 ">
                    <a href="/peminjaman/{{ $book->id }}">Pinjam</a>
                </button>
            </div>
            @endforeach
        </div>
    </div>
</div>
