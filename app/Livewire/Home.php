<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{

    public function mount() {

        if (!Auth::check()) {
            return redirect('/login');
        }
    }

    public function render()
    {
        return view('livewire.home');
    }
}
