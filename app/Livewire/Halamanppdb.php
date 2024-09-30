<?php

namespace App\Livewire;

use App\Models\Ppdb;
use Livewire\Component;

class Halamanppdb extends Component
{
    public $ppdbs = [];

    public function mount()
    {
        $this->loadPpdb();
    }

    public function loadPpdb() {
        $this->ppdbs = Ppdb::where('is_active', 1)->get();
    }
    public function render()
    {
        return view('livewire.halamanppdb');
    }
}
