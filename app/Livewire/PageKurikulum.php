<?php

namespace App\Livewire;

use App\Models\Kurikulum;
use App\Models\PointKurikulum;
use Livewire\Component;

class PageKurikulum extends Component
{
    
    public $Kurikulum;
    public $point;

    public function loadKurikulum() {
        $this->Kurikulum = Kurikulum::where('is_active', 1)->get();
    }

    public function loadPoint() {
        $this->point = PointKurikulum::where('is_active', 1)->get();
    }

    public function mount()
    {
        $this->loadKurikulum();
        session()->flash('title','Kurikulum');

        $this->loadPoint();
    }
    public function render()
    {
        return view('livewire.page-kurikulum');
    }
}
