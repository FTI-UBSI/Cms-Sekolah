<?php

namespace App\Livewire;

use App\Models\KalenderAkademik;
use Livewire\Component;

class Akademik extends Component
{
    public $KalenderAkademik;

    public function loadKalenderAkademik() {
        $this->KalenderAkademik = KalenderAkademik::all()
        ->where('is_active',1);
    }

    public function mount() {
        $this->loadKalenderAkademik();
    }
    public function render()
    {
        // return view('livewire.akademik');
        $KalenderAkademik = KalenderAkademik::all(); // Mengambil semua postingan
        return view('livewire.akademik', compact('KalenderAkademik'));
    }
}
