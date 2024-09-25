<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;



class Announcements extends Component


{
    public $announcements;

    public function loadannouncement() {
        // Mengambil semua data slider
        $this->announcements = Announcement::all()
        ->where('is_active', 1);
    }
    public function mount()
    {
        // Mengambil data pengumuman dari model
        $this->announcements = Announcement::where('is_active', 1)->get();
    }

    public function render()
    {
        return view('livewire.announcements');
    }
}
