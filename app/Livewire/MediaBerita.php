<?php

namespace App\Livewire;

use App\Models\MediaBeritanews;
use Livewire\Component;

class MediaBerita extends Component
{
    public $MediaBerita;
    public function loadMediaBerita() {
        $this->MediaBerita = MediaBeritanews::all()
        ->where('is_active', 1);

    }

    public function mount() {
        $this->loadMediaBerita();
    }
    public function render()
    {
        return view('livewire.media-berita');
        
    }
}

