<?php

namespace App\Livewire;

use App\Models\Background;
use App\Models\Kuskur;
use Livewire\Component;

class PageKuskur extends Component
{
    public $Kuskur;
    public $background;
    public function loadKuskur() {
        $this->Kuskur = Kuskur::where('is_active', 1)->get();
    }
    public function loadBackground() {
        $this->background = Background::where('is_active', 1)->get();
    }

    public function mount()
    {
        $this->loadKuskur();
        $this->loadBackground();
        session()->flash('title','Program Khusus');
    }
    public function render()
    {
        return view('livewire.page-kuskur');
    }
}
