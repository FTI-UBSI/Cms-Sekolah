<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Media extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.media');
    }
}
