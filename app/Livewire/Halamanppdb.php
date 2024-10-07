<?php

namespace App\Livewire;

use App\Models\Infoppdb;
use App\Models\Ppdb;
use App\Models\SyaratPpdb;
use App\Models\ViewCount;
use Livewire\Component;

class Halamanppdb extends Component
{
    public $ppdbs;
    public $info;

    public $syarat;
    public $viewCount;


    public function loadView(){
        $this->viewCount = ViewCount::where('page', 'halamanppdb')->first();
        if (!$this->viewCount) {
            $this->viewCount = ViewCount::create([
                'page' => 'halamanppdb',
                'count' => 0,
            ]);
        }

        // Increment view count setiap kali halaman PPDB diakses
        $this->viewCount->increment('count');
    }
    public function loadPpdb() {
        $this->ppdbs = Ppdb::where('is_active', 1)->get();
    }

    public function loadSyarat() {
        $this->syarat = SyaratPpdb::where('is_active', 1)->get();
    }

    public function loadInfo() {
        // Ambil data InfoPPDB, dan tambahkan nomor urut pada deskripsi
        $this->info = Infoppdb::where('is_active', 1)->get()->map(function($item) {
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
        $this->loadPpdb();
        $this->loadInfo();
        $this->loadView();
        $this->loadSyarat();
    }

    public function render()
    {
        return view('livewire.halamanppdb');
    }
}
