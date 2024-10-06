<?php

namespace App\Livewire;

use App\Models\MetodePembelajaran;
use Livewire\Component;

class PageMetode extends Component
{
    public $Metode;
    public function loadMetode() {
        $this->Metode = MetodePembelajaran::where('is_active', 1)->get();
    }

    public function mount()
    {
        $this->loadMetode();
        session()->flash('title','Program Khusus');
    }
    public function render()
    {
        return view('livewire.page-metode');
    }
}
