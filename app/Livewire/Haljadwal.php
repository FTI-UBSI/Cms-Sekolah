<?php

namespace App\Livewire;

use App\Models\JadwalPpdb;
use Livewire\Component;


class Haljadwal extends Component
{
    public $jadwal;

    public function loadJadwal() {
        $this->jadwal = JadwalPpdb::where('is_active', 1)->get();
    }

    public function mount()
    {
        $this->loadJadwal();
    }
    public function render()
    {
        return view('livewire.haljadwal');
    }
}
