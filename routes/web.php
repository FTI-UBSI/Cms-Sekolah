<?php

use App\Filament\Resources\AnnouncementController;
use App\Filament\Resources\ProbriController;
use App\Http\Controllers\ContactController;
use App\Livewire\Agenda;
use App\Livewire\Akademik;
use App\Livewire\Alumni;
use App\Livewire\Auth\Login;
use App\Livewire\Beranda;
use App\Livewire\Berita;
use App\Livewire\Ekstrakurikuler;
use App\Livewire\EventPage\Agenda as EventPageAgenda;
use App\Livewire\Fasilitas;
use App\Livewire\Foto;
use App\Livewire\GTK;
use App\Livewire\Halalur;
use App\Livewire\Halamanppdb;
use App\Livewire\Haljadwal;
use App\Livewire\Halsyarat;
use App\Livewire\KontenBerita;
use App\Livewire\Media;
use App\Livewire\MediaBerita;
use App\Livewire\MediaFoto;
use App\Livewire\MediaSosial;
use App\Livewire\MediaVideo;
use App\Livewire\Medsos;
use App\Livewire\PageEskul;
use App\Livewire\PageKhusus;
use App\Livewire\PageKontak;
use App\Livewire\PageKurikulum;
use App\Livewire\PageKuskur;
use App\Livewire\PageMetode;
use App\Livewire\PageProsus;
use App\Livewire\PageStruktur;
use App\Livewire\Prestasi;
use App\Livewire\Profil;
use App\Livewire\Tendik;
use App\Livewire\Video;
use App\Models\Announcement;
use App\Models\Instagram;
use App\Models\KalenderAgenda;
use App\Models\KalenderAkademik;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin/login', Login::class)->name('filament.admin.auth.login');

Route::get('/', Beranda::class)->name('Beranda');
Route::get('/profil', action: Profil::class)->name('Profil');
Route::get('/gtk', action: GTK::class)->name('GTK');
Route::get('/fasilitas', Fasilitas::class)->name('Fasilitas');
Route::get('/alumni', Alumni::class)->name('Alumni');
Route::get('/prestasi', Prestasi::class)->name('Prestasi');
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
Route::get('/kurikulum', PageKurikulum::class)->name('Kurikulum');
Route::get('/struktur', PageStruktur::class)->name('Struktur Pembelajaran');
Route::get('/metode', PageMetode::class)->name('Metode Pembelajaran');
Route::get('/program', PageKhusus::class)->name('Program Khusus');
Route::get('/kuskur', PageKuskur::class)->name('Kurikulum Khusus');
Route::get('/slider', [Slider::class, 'showSlider']);
Route::get('/probris', [ProbriController::class, 'index'])->name('probris.index');
Route::get('/media-berita', MediaBerita::class)->name('Media-Berita');
Route::get('/media-foto', MediaFoto::class)->name('foto');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/media-video', MediaVideo::class)->name('Media-Video');
Route::get('/media-sosial', MediaSosial::class)->name('Media-Sosial');
Route::get('/agenda', Agenda::class)->name('Agenda');
Route::get('/akademik', Akademik::class)->name('Akademik');

Route::get('/announcements', function () {
    // Ambil semua pengumuman yang aktif
    $announcements = Announcement::where('is_active', true)
                                  ->orderBy('order', 'asc')
                                  ->get();

    // Kirim variabel $announcements ke view 'announcements.index'
    return view('announcements.index', compact('announcements'));
})->name('announcements.index');

// Route Kalenderagenda
Route::get('/kalender1/{date}', function($date) {
    // Mengambil postingan berdasarkan tanggal
    $KalenderAgenda = KalenderAgenda::whereDate('start_date', '<=', $date)
                 ->whereDate('end_date', '>=', $date)
                 ->get();

    return response()->json($KalenderAgenda); // Mengembalikan hasil dalam format JSON
});
// Route Kalenderagenda

// Route KalenderAkademik
Route::get('/kalender2/{date}', function($date) {
    // Mengambil postingan berdasarkan tanggal
    $KalenderAkademik = KalenderAkademik::whereDate('start_date', '<=', $date)
                 ->whereDate('end_date', '>=', $date)
                 ->get();

    return response()->json($KalenderAkademik); // Mengembalikan hasil dalam format JSON
});
// Route KalenderAkademik

