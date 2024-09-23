<?php

namespace App\Livewire;

use App\Models\News;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;


class Berita extends Component
{
    public $berita;
    public function loadberita(){
      $this->berita = News::all();
    //   dd($this->berita);
    foreach ($this->berita as $item) {
        $formattedDate = Carbon::parse($item->publish_date)->translatedFormat('d F Y');
        $textContent = strip_tags($item->description);

        $item->description = Str::limit($textContent, 150, ' .....');
        $item->publish_date = $formattedDate;
    }
    }
    public function mount(){
        $this->loadberita();
    }
    public function render()
    {
        return view('livewire.berita');
    }
}
