<?php

namespace App\Livewire;

use App\Models\MediaPhoto;
use Livewire\Component;

class MediaFoto extends Component
{
    public $MediaFoto;
    public function loadMediaPhoto() {
        $this->MediaFoto = MediaPhoto::all()
        ->where('is_active', 1);

    }
    
    public function mount() {
        $this->loadMediaPhoto();
    }

    public function render()
    {
    
        return view('livewire.media-foto');
    }
}
