<?php

namespace App\Livewire;

use App\Models\StrukturPembelajaran;
use Livewire\Component;

class PageStruktur extends Component
{

    public $struktur;
    public function loadStruktur() {
        $this->struktur = StrukturPembelajaran::where('is_active', 1)->get();
    }

    public function mount()
    {
        $this->loadStruktur();
        session()->flash('title','Page Struktur Pembelajaran');
    }
    public function render()
    {
        return view('livewire.page-struktur');
    }
}
