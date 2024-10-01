<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;

class MediaVideo extends Component
{
    public $MediaVideo;
    public function loadMediaBerita() {
        $this->MediaVideo = Video::all()
        ->where('is_active', 1);

    }

    public function mount() {
        $this->loadMediaBerita();
    }
    public function render()
    {
        return view('livewire.media-video');
    }
}
