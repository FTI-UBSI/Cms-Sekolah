<?php

namespace App\Livewire;

use App\Models\Extracurricular;
use Livewire\Component;

class Ekstrakurikuler extends Component
{
    public $extracurricular;

    public function loadExtracurricular()
    {
        $this->extracurricular = Extracurricular::with('category')
            ->where('is_active', 1)
            ->get()
            ->filter(function ($item) {
                return $item->category !== null;
            })
            ->groupBy(function ($item) {
                return $item->category->title;
            })
            ->toArray();
    }

    public function mount()
    {

        $this->loadExtracurricular();
    }
    public function render()
    {
        return view('livewire.ekstrakurikuler');
    }
}
