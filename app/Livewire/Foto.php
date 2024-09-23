<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;
use Livewire\WithPagination;

class Foto extends Component
{

    public function render()
    {
        return view('livewire.foto',[
            'foto' => Photo::whereNull('parent_id')
                                ->where('tipe','folder')
                                ->paginate(5)
        ]);
    }
}
