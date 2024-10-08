<?php

namespace App\Livewire;

use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\Extracurricular;
use App\Models\MediaBeritanews;
use App\Models\News;
use App\Models\Probri;
use App\Models\Seragam;
use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\Video;
use App\Models\ViewCount;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class Beranda extends Component
{
 

    public $slider;
    public $agenda;
    public $extracurricular;
    public $month;
    public $news;
    public $announcements;
    public $probis;
    public $testimoni;
    public $seragam;
    public $video;
    public $viewCount;


    public function loadView(){
        $this->viewCount = ViewCount::where('page', 'beranda')->first();
        if (!$this->viewCount) {
            $this->viewCount = ViewCount::create([
                'page' => 'beranda',
                'count' => 0,
            ]);
        }

        // Increment view count setiap kali halaman beranda diakses
        $this->viewCount->increment('count');
    }

    public function loadVideo() {
        // Mengambil semua data slider
        $this->video = Video::latest()->take(1)
        ->where('is_active', 1)->first();
        // dd($this->video);
    }

    public function loadTestimoni() {
        // Mengambil semua data slider
        $this->testimoni = Testimoni::all()
        ->where('is_active', 1);
    }

    public function loadSeragam() {
        // Mengambil semua data slider
        $this->seragam = Seragam::all()
        ->where('is_active', 1);
    }
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
    public function loadNews() {
        $this->news = MediaBeritanews::all()
        ->where('is_active', 1);

    }

    // Mengirim data ke Beranda
    public function mount()
    {
        $this->loadSlider();
        $this->loadVideo();
        $this->loadAnnouncement();
        $this->loadTestimoni();
        $this->loadSeragam();
        $this->loadAgenda();
        $this->loadExtracurricular();
        $this->loadNews();
        $this->loadView();
        session()->flash('title','Beranda');
        // dd($this->news);
    }


    public function render()
    {
        return view('livewire.beranda');
    }
}
