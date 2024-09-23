<?php

namespace App\Livewire;

use App\Models\Educator;
use Livewire\Component;

class Tendik extends Component
{
    public $tendik;

    public function loadTendik()
    {
        $this->tendik = Educator::all()->where('is_active', 1);
    }

    public function mount()
    {
        $this->loadTendik();
    }

    public function render()
    {
        return view('livewire.tendik');
    }
}
