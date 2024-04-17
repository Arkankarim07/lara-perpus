<?php

namespace App\Livewire;

use App\Models\Buku;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{

    public $books;
    public function mount() {

        $this->books = Buku::all();

        if (!Auth::check()) {
            return redirect('/login');
        }
    }

    public function render()
    {
        return view('livewire.home.home');
    }
}
