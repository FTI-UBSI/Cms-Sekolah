<?php

namespace App\Livewire;

use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\Extracurricular;
use App\Models\News;
use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;

class Beranda extends Component
{

    public $slider;
    public $agenda;
    public $extracurricular;
    public $month;
    public $news;
    public $announcements;

    //announcement
    protected function loadAnnouncement()
    {
        // Mengambil semua data slider
        $this->announcements = Announcement::all()
        ->where('is_active', 1);
    }

    // Slider
    protected function loadSlider()
    {
        // Mengambil semua data slider
        $this->slider = Slider::all()
        ->where('is_active', 1);
    }

    // Agenda
    protected function loadAgenda()
    {
        $today = Carbon::today();
        $this->month = $today->locale('id')->translatedFormat('F') ;

        // Mengambil agenda sesuai bulan dan tahun saat ini
        $this->agenda = Agenda::whereMonth('date', $today->month)
            ->where('is_active', 1)
            ->whereYear('date', $today->year)
            ->orderBy('date', 'asc')
            ->get();

        // Mengubah format tanggal untuk setiap agenda menggunakan Carbon
        $this->agenda->each(function ($item) {
            $item->tanggal = ltrim(Carbon::parse($item->date)->format('d'), '0');
        });
    }

    // Extracurricular
    protected function loadExtracurricular()
    {
        // Mengambil semua data extracurricular dan memuat relasi category
        $this->extracurricular = Extracurricular::with('category')
            ->where('is_active', 1) // Hanya mengambil data yang aktif
            ->get();
    }

    // News
    protected function loadNews()
    {
        $this->news = News::where('is_active', 1)
            ->get();
    }

    // Mengirim data ke Beranda
    public function mount()
    {
        $this->loadSlider();
        $this->loadAnnouncement();
        $this->loadAgenda();
        $this->loadExtracurricular();
        $this->loadNews();
        session()->flash('title','Beranda');
        // dd($this->news);
    }


    public function render()
    {
        return view('livewire.beranda');
    }
}
