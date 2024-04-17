<?php

namespace App\Livewire\Admin;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;
use function Laravel\Prompts\confirm;

class AdminDashboard extends Component
{
    public $data;
    public function mount() {
        $this->data =Peminjaman::all();    
    }
    

    public function render()
    {
        return view('livewire.admin.index');
   
    }

}
