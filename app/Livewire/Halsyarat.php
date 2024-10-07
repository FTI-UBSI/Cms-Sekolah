<?php

namespace App\Livewire;

use App\Models\SyaratPpdb;
use Livewire\Component;

class Halsyarat extends Component
{

    public $syarat;

    public function loadSyarat() {
        $this->syarat = SyaratPpdb::where('is_active', 1)->get();
    }

    public function mount()
    {
        $this->loadSyarat();
    }
    public function render()
    {
        return view('livewire.halsyarat');
    }
}
