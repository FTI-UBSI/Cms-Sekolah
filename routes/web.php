<?php

use App\Filament\Resources\AnnouncementController;
use App\Filament\Resources\ProbriController;
use App\Livewire\Auth\Login;
use App\Livewire\Beranda;
use App\Livewire\Berita;
use App\Livewire\Ekstrakurikuler;
use App\Livewire\Fasilitas;
use App\Livewire\Foto;
use App\Livewire\Halamanppdb;
use App\Livewire\KontenBerita;
use App\Livewire\Media;
use App\Livewire\MediaBerita;
use App\Livewire\MediaFoto;
use App\Livewire\MediaSosial;
use App\Livewire\MediaVideo;
use App\Livewire\Medsos;
use App\Livewire\Tendik;
use App\Livewire\Video;
use App\Models\Announcement;
use App\Models\Instagram;
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
Route::get('/ekstrakurikuler', Ekstrakurikuler::class);
Route::get('/slider', [Slider::class, 'showSlider']);
Route::get('/probris', [ProbriController::class, 'index'])->name('probris.index');
Route::get('/media-berita', MediaBerita::class)->name('Media-Berita');
Route::get('/media-foto', MediaFoto::class)->name('foto');
Route::get('/media-video', MediaVideo::class)->name('Media-Video');
Route::get('/media-sosial', MediaSosial::class)->name('Media-Sosial');
// Route::get('/media', Media::class)->name('Media');

Route::get('/announcements', function () {
    // Ambil semua pengumuman yang aktif
    $announcements = Announcement::where('is_active', true)
                                  ->orderBy('order', 'asc')
                                  ->get();

    // Kirim variabel $announcements ke view 'announcements.index'
    return view('announcements.index', compact('announcements'));
})->name('announcements.index');



// Route::get('/instagram-posts', function () {
//     $posts = Instagram::all();
//     return view('instagram-posts', compact('posts'));
// });

