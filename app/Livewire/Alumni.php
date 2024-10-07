<?php

namespace App\Livewire;

use App\Models\Graduate;
use Livewire\Component;
use Log;

class Alumni extends Component
{
    public $years = [2015, 2016, 2018];
    public $selectedYears = [];

    public function loadAlumni()
    {
        $this->selectedYears = Graduate::all()
            ->where('is_active', 1);
    }

    public function mount(){
        $this->selectedYears = $this->years;
    }

    public function updatedSelectedYears()
    {
        Log::info('Selected years updated: ', $this->selectedYears);
    }

    public function render()
    {
        $filteredAlumni = Graduate::whereIn('graduation_year', $this->selectedYears)->get();
        return view('livewire.alumni', [
            'filteredAlumni' => $filteredAlumni,
        ]);
    }
}
