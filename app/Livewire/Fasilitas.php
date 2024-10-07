<?php

namespace App\Livewire;

use App\Models\Facility;
use Livewire\Component;

class Fasilitas extends Component
{
    public $facility;

    public function loadFacility()
    {
        $this->facility = Facility::all()
        ->where('is_active', 1);
    }

    public function mount()
    {
        $this->loadFacility();
    }

    public function render()
    {
        return view('livewire.fasilitas');
    }
}
