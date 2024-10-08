<?php

namespace App\Livewire;

use App\Models\about;
use Livewire\Component;
use App\Models\User;
use Auth;

class Profil extends Component
{

    public $about;
    public function loadabout()
    {
        // Mengambil foto header Tentang Kami
        $this->about = about::all()
        ->where('is_active', 1);
    }

    public function mount()
    {
        $this->loadabout();
    }
 public function render()
    {
        return view('livewire.profil');
    }
}
