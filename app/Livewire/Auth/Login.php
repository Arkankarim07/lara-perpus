<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required', message: 'Name is required')]
    public $name;

    #[Validate('required', message: 'Name is required')]
    public $password;

    public function login() {
        $credential = $this->validate();

        if (auth()->attempt($credential)) {
            session()->regenerate();

            session()->flash('success', 'Berhasil Login');
            return redirect()->to('/home');
        } else {
            return back()->with('error', 'Password / Username is invalid');
        }
            
    }

    
    public function render()
    {
        return view('livewire.auth.login');
    }
}
