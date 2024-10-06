<?php

namespace App\Livewire;

use App\Models\Program;
use Livewire\Component;

class PageKhusus extends Component
{

    public $prosus;
    public function loadProsus() {
        $this->prosus = Program::where('is_active', 1)->get();
    }

    public function mount()
    {
        $this->loadProsus();
        session()->flash('title','Program Khusus');
    }
    public function render()
    {
        return view('livewire.page-khusus');
    }
}
