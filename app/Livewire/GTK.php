<?php

namespace App\Livewire;

use App\Models\Educator;
use Livewire\Component;

class GTK extends Component
{
    public $educators = [];
    public function loadeducators()
    {
        $this->educators = Educator::all()
            ->where('is_active', 1);
    }

    public function mount()
    {
        $this->loadEducators();
    }
    public function render()
    {
        return view('livewire.g-t-k');
    }
}
