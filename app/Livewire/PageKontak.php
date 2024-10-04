<?php

namespace App\Livewire;

use App\Models\Kontak;
use App\Models\Peta;
use App\Models\sosmed;
use Livewire\Component;

class PageKontak extends Component
{
    public $name;
    public $email;
    public $phone;
    public $jenis_informasi;
    public $subject;
    public $message;
    public $sosmed;
    public $peta;

    public function loadSosmed() {
        $this->sosmed = sosmed::where('is_active', 1)->get();
    }

    public function loadPeta() {
        $this->peta = Peta::where('is_active', 1)->get();
    }
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'jenis_informasi' => 'required|string',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Simpan data ke dalam database
        Kontak::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'jenis_informasi' => $this->jenis_informasi,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        // Reset form setelah berhasil
        $this->reset();

        session()->flash('success', 'Pesan berhasil dikirim!');
        
    }
    public function mount()
    {
        $this->loadSosmed();
        $this->loadPeta();
    }
    public function render()
    {
        return view('livewire.page-kontak');
    }
}
