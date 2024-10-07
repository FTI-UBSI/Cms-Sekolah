<?php

namespace App\Livewire;

use App\Models\AlurPpdb;
use Livewire\Component;

class Halalur extends Component
{

    public $alurppdb;

    public function loadAlur() {
        $this->alurppdb = Alurppdb::where('is_active', 1)->get()->map(function($item) {
            // Pisahkan deskripsi berdasarkan newline (enter)
            $descriptions = explode("\n", $item->description);
            
            // Buat deskripsi dengan nomor urut
            $numberedDescriptions = array_map(function($description, $key) {
                return ($key + 1) . '. ' . $description;
            }, $descriptions, array_keys($descriptions));

            // Gabungkan kembali array menjadi string dengan newline
            $item->description = implode("\n", $numberedDescriptions);

            return $item;
        });
    }

    public function mount()
    {
        $this->loadAlur();
    }
    public function render()
    {
        return view('livewire.halalur');
    }
}
