<?php

namespace App\Livewire\EventPage;

use App\Models\KalenderAgenda;
use Livewire\Component;

class Agenda extends Component
{
    // public $KalenderAgenda;

    // public function loadKalenderAgenda(){
    //     $this->KalenderAgenda = KalenderAgenda::all()
    //     ->where('is_active', 1);
    // }

    public function mount() {

        // $this->loadKalenderAgenda();
        // dd($this->KalenderAgenda);


    }

    public function render()
    {
        return view('livewire.event-page.agenda');
    }
}
