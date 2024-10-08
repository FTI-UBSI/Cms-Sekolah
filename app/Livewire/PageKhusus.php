<?php

namespace App\Livewire;

use App\Models\Background;
use App\Models\Program;
use Livewire\Component;

class PageKhusus extends Component
{

    public $prosus;
    public $background;
    public function loadBackground() {
        $this->background = Background::where('is_active', 1)->get();
    }
    public function loadProsus() {
        $this->prosus = Program::where('is_active', 1)->get();
    }

    public function mount()
    {
        $this->loadProsus();
        $this->loadBackground();
        session()->flash('title','Program Khusus');
    }
    public function render()
    {
        return view('livewire.page-khusus');
    }
}
