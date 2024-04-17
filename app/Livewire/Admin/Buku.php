<?php

namespace App\Livewire\Admin;

use App\Models\Buku as ModelsBuku;
use Livewire\Component;

class Buku extends Component
{
    public $dataBuku;

    public function mount(){
        $this->dataBuku = ModelsBuku::all();
    }
    public function render()
    {
        return view('livewire.admin.buku');
    }
}
