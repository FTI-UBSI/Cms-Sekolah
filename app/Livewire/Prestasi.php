<?php

namespace App\Livewire;

use App\Models\Achievement;
use Livewire\Component;

class Prestasi extends Component
{

    public $achievements;
    public function loadAchievements()
    {
        $this->achievements = Achievement::all()
            ->where('is_active', 1);
    }
    
    public function mount()
    {
        $this->loadAchievements();
    }


    public function render()
    {
        return view('livewire.prestasi');
    }
}
