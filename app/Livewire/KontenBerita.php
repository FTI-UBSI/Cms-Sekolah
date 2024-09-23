<?php

namespace App\Livewire;

use App\Models\News;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class KontenBerita extends Component
{
    public $berita;
    public $other;
    public $title;
    public function loadberita($id){
        $this->berita = News::find($id);
        session()->flash('title', $this->berita->title);
        $this->title = $this->berita->title;
        $this->other = News::whereNot('id',$id)
                            ->where('is_active',true)
                            ->latest()
                            ->get();
        foreach ($this->other as $item) {
            $formattedDate = Carbon::parse($item->publish_date)->translatedFormat('d F Y');
            $textContent = strip_tags($item->description);

            $item->title = Str::limit($item->title, 30, ' ...');
            $item->description = Str::limit($textContent, 40, ' ...');
            $item->publish_date = $formattedDate;
        }
        $this->berita->publish_date= Carbon::parse($this->berita->publish_date)->translatedFormat('d F Y');
    }
    public function mount($id){
        $this->loadberita($id);
    }

    public function render()
    {
        return view('livewire.konten-berita');
    }
}
