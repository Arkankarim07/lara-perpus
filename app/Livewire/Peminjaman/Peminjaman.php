<?php

namespace App\Livewire\Peminjaman;

use App\Models\Buku;
use Livewire\Component;

class Peminjaman extends Component
{
    public $books;

    public function mount() {
        $this->books = Buku::all();
    }

    
    public function render()
    {
        return view('livewire.peminjaman.index');
    }
}
