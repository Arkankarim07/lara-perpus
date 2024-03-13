<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        auth()->logout();
        return redirect()->to('/login');
    }

    public function render() {
        return view('livewire.auth.logout');
    }
}
