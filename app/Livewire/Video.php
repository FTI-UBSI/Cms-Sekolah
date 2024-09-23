<?php

namespace App\Livewire;

use App\Models\Video as ModelsVideo;
use Livewire\Component;
use Livewire\WithPagination;

class Video extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.video', [
            'video' => ModelsVideo::latest()->where('is_active', 1)->paginate(4),
        ]);
    }
}
