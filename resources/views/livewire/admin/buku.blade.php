<div>
    <div class="overflow-x-auto">

        <table class="table-auto w-full text-center border-collapse border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Judul</th>
                    <th class="px-4 py-2">Penulis</th>
                    <th class="px-4 py-2">Penerbit</th>
                    <th class="px-4 py-2">Stok</th>
                    <th class="px-4 py-2">Tgl Terbit</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($dataBuku as $buku)    
                <tr>
                    <td class="px-4 py-2">{{ $buku->judul }}</td>
                    <td class="px-4 py-2">{{ $buku->penulis }}</td>
                    <td class="px-4 py-2">{{ $buku->penerbit }}</td>
                    <td class="px-4 py-2">{{ $buku->stok }}</td>
                    <td class="px-4 py-2">{{ $buku->tgl_terbit }}</td>
                    <td class=>
                        <form class="inline" action="/admin/{{ $buku->id }}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick=" return confirm('Yakin DELETE?')" type="submit" class="p-2 bg-red-600 rounded-md"><ion-icon class="text-white" name="close-circle"></ion-icon></button>
                        </form>
                        <button class="p-2 bg-yellow-500 rounded-md"><ion-icon class="text-white" name="create"></ion-icon></button>
                        <button class="p-2 bg-green-500 rounded-md"><ion-icon class="text-white" name="checkmark"></ion-icon></button>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    </div>
</div>