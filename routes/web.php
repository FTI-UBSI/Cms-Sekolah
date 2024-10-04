<?php

use App\Filament\Resources\AnnouncementController;
use App\Filament\Resources\ProbriController;
use App\Http\Controllers\ContactController;
use App\Livewire\Auth\Login;
use App\Livewire\Beranda;
use App\Livewire\Berita;
use App\Livewire\Ekstrakurikuler;
use App\Livewire\Fasilitas;
use App\Livewire\Foto;
use App\Livewire\Halalur;
use App\Livewire\Halamanppdb;
use App\Livewire\Haljadwal;
use App\Livewire\Halsyarat;
use App\Livewire\KontenBerita;
use App\Livewire\PageEskul;
use App\Livewire\PageKontak;
use App\Livewire\Tendik;
use App\Livewire\Video;
use App\Models\Announcement;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin/login', Login::class)->name('filament.admin.auth.login');

Route::get('/', Beranda::class)->name('Beranda');
Route::get('/fasilitas', Fasilitas::class);
Route::get('/video', Video::class);
Route::get('/foto', Foto::class);
Route::get('/berita', Berita::class);
Route::get('/berita/{id}', KontenBerita::class);
Route::get('/tenaga-kependidikan', Tendik::class);
Route::get('/ppdb', Halamanppdb::class)->name('HalamanPPDB');
Route::get('/syarat', Halsyarat::class)->name('Syarat');
Route::get('/alur', Halalur::class)->name('Alur');
Route::get('/jadwal', Haljadwal::class)->name('Jadwal');
Route::get('/kontak', PageKontak::class)->name('Kontak');
Route::get('/eskul', PageEskul::class)->name('Eskul');
Route::get('/slider', [Slider::class, 'showSlider']);
Route::get('/probris', [ProbriController::class, 'index'])->name('probris.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/announcements', function () {
    // Ambil semua pengumuman yang aktif
    $announcements = Announcement::where('is_active', true)
                                  ->orderBy('order', 'asc')
                                  ->get();

    // Kirim variabel $announcements ke view 'announcements.index'
    return view('announcements.index', compact('announcements'));
})->name('announcements.index');


