<?php

use App\Livewire\Auth\Login;
use App\Livewire\Beranda;
use App\Livewire\Berita;
use App\Livewire\Ekstrakurikuler;
use App\Livewire\Fasilitas;
use App\Livewire\Foto;
use App\Livewire\KontenBerita;
use App\Livewire\Media;
use App\Livewire\Tendik;
use App\Livewire\Video;
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
Route::get('/ekstrakurikuler', Ekstrakurikuler::class);
Route::get('/slider', [Slider::class, 'showSlider']);
Route::get('/media', Media::class)->name('Media') ;
