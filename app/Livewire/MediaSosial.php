<?php

namespace App\Livewire;

use App\Models\Medsos;
use App\Models\Video;
use Livewire\Component;

class MediaSosial extends Component
{
    public $Medsos;

    public $MediaSosial;

    public function loadMediaBerita() {
        $this->Medsos = Video::all()
        ->where('is_active', 1);

    }

    public function loadMediaSosial() {
        $this->MediaSosial = Medsos::all()
        ->where('is_active', 1);
    }
    
    public function mount() {
        $this->loadMediaBerita();
        $this->loadMediaSosial();
    }

    public function render()
    {
        return view('livewire.media-sosial');
    }
}
