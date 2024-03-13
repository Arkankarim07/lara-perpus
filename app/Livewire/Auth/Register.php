<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{

    // Rules
    #[Validate('required', message:'Name is required')]
    public $name;
    
    #[Validate('required', message:'Email is required')]
    #[Validate('email', message:'Email is not valid')]
    #[Validate('unique:users', message:'Email already exists')]
    public $email;

    #[Validate('required', message:'Password is required')]
    #[Validate('min:4', message:'Password must be at least 4 characters')]
    public $password;

    public function save() {
        $validate = $this->validate();
        
        User::create($validate);
        session()->flash('success', 'User created successfully, you can login now!');
        return redirect()->to('/login');

    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
