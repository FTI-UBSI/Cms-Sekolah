<?php

namespace App\Livewire;

use App\Models\Agenda as ModelsAgenda;
use App\Models\KalenderAgenda;
use App\Models\MediaBeritanews;
use Livewire\Component;

class Agenda extends Component
{

    public $MediaBerita;

    // public $Agenda;

    public $KalenderAgenda;

    public function loadKalenderAgenda() {
        $this->KalenderAgenda = KalenderAgenda::all()
        ->where('is_active',1);
    }
    // public function loadAgenda() {
    //     $this->Agenda = ModelsAgenda::all()
    //     ->where('is_active',1);
    // }
    public function loadMediaBerita() {
        $this->MediaBerita = MediaBeritanews::all()
        ->where('is_active',1);
    }

    public function mount() {
        $this->loadKalenderAgenda();
        // $this->loadAgenda();
        $this->loadMediaBerita();
    }
    public function render()
    {
        // return view('livewire.agenda');
        $KalenderAgenda = KalenderAgenda::all(); // Mengambil semua postingan
        return view('livewire.agenda', compact('KalenderAgenda'));
    }
}
