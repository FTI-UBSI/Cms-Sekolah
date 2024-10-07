<?php

namespace App\Livewire;

use App\Models\Background;
use App\Models\Eskul;
use Livewire\Component;

class PageEskul extends Component
{
    public $eskul;
    public $background;
    public function loadBackground() {
        $this->background = Background::where('is_active', 1)->get();
    }
    public function loadEskul() {
        $this->loadBackground();
        $this->eskul = Eskul::where('is_active', 1)->get();
    }
    public function mount()
    {
        $this->loadEskul();
        session()->flash('title','Ekstrakulikuler');
    }
    
    public function render()
    {
        return view('livewire.page-eskul');
    }
}
