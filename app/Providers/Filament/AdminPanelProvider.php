<?php

namespace App\Providers\Filament;

use App\Filament\Resources\AboutResource;
use App\Filament\Resources\AchievementResource;
use App\Filament\Resources\AgendaResource;
use App\Filament\Resources\AlurppdbResource;
use App\Filament\Resources\AnnouncementResource;
use App\Filament\Resources\BackgroundResource;
use App\Filament\Resources\EducatorResource;
use App\Filament\Resources\EskulResource;
use App\Filament\Resources\ExtracurricularResource;
use App\Filament\Resources\GraduateResource;
use App\Filament\Resources\KalenderAkademikResource;
use App\Filament\Resources\KalenderResource;
use App\Filament\Resources\KontakResource;
use App\Filament\Resources\KurikulumResource;
use App\Filament\Resources\KuskurResource;
use App\Filament\Resources\MediaSosialResource;
use App\Filament\Resources\PhotoResource;
use App\Filament\Resources\FacilityResource;
use App\Filament\Resources\InfoppdbResource;
use App\Filament\Resources\InstagramPostResource;
use App\Filament\Resources\JadwalppdbResource;
use App\Filament\Resources\MediaBeritaResource;
use App\Filament\Resources\MediaFotoResource;
use App\Filament\Resources\MedsosResource;
use App\Filament\Resources\MetodeResource;
use App\Filament\Resources\NewsResource;
use App\Filament\Resources\PetaResource;
use App\Filament\Resources\PointKurikulumResource;
use App\Filament\Resources\PpdbResource;
use App\Filament\Resources\ProbriResource;
use App\Filament\Resources\ProgramResource;
use App\Filament\Resources\SeragamResource;
use App\Filament\Resources\SliderResource;
use App\Filament\Resources\SosmedResource;
use App\Filament\Resources\StrukturResource;
use App\Filament\Resources\SyaratppdbResource;
use App\Filament\Resources\TestimoniResource;
use App\Filament\Resources\VideoResource;
use App\Filament\Resources\ViewResource;
use App\Livewire\Auth\Login;
use App\Models\KalenderAgenda;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationManager;
use Filament\Pages;
use Filament\Pages\Dashboard;
use Filament\Pages\SubNavigationPosition;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->spa()
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(Login::class)
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Indigo,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->font('Poppins')
            ->brandName('CMS Sekolah')
            ->favicon(asset('images/favicon.png'))
            ->sidebarFullyCollapsibleOnDesktop()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])  

            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return $builder->groups([
                    NavigationGroup::make()
                        ->items([
                            NavigationItem::make('Dasbor')
                                ->icon('heroicon-o-home')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.pages.dashboard'))
                                ->url(fn(): string => Dashboard::getUrl()),
                            NavigationItem::make('Visitor')
                                ->icon('heroicon-o-user-group')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.views.index'))
                                ->url(ViewResource::getUrl()),
                            NavigationItem::make('Background')
                                ->icon('heroicon-o-user-group')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.backgrounds.index'))
                                ->url(BackgroundResource::getUrl()),
                        ]),

                    NavigationGroup::make('Page Beranda')
                        ->items([
                            NavigationItem::make('Slider')
                                ->icon('heroicon-o-arrows-right-left')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.sliders.index'))
                                ->url(SliderResource::getUrl()),
                            NavigationItem::make('Profil Singkat')
                                ->icon('heroicon-o-tv')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.probris.index'))
                                ->url(ProbriResource::getUrl()),
                            NavigationItem::make('Jadwal Seragam')
                                ->icon('heroicon-o-academic-cap')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.seragam.index'))
                                ->url(SeragamResource::getUrl()),
                                NavigationItem::make('Testimoni Orang')
                                ->icon('heroicon-o-chat-bubble-oval-left-ellipsis')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.testimoni.index'))
                                ->url(TestimoniResource::getUrl()),
                            NavigationItem::make('Agenda')
                                ->icon('heroicon-o-calendar-days')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.agendas.index'))
                                ->url(AgendaResource::getUrl()),
                            NavigationItem::make('Berita')
                                ->icon('heroicon-o-document-text')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.news.index'))
                                ->url(NewsResource::getUrl()),
                                NavigationItem::make('Pengumuman')
                                ->icon('heroicon-o-speaker-wave')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.announcements.index'))
                                ->url(AnnouncementResource::getUrl()),
                        ]),
                        NavigationGroup::make('Page Profil')
                        ->items([
                            NavigationItem::make('Tentang Kami')
                                ->icon('heroicon-o-user-circle')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.about.index'))
                                ->url(AboutResource::getUrl()),
                            NavigationItem::make('GTK')
                                ->icon('heroicon-o-user-group')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.educators.index'))
                                ->url(EducatorResource::getUrl()),
                            NavigationItem::make('Fasilitas')
                                ->icon('heroicon-o-building-office')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.facilities.index'))
                                ->url(FacilityResource::getUrl()),
                            NavigationItem::make('Alumni')
                                ->icon('heroicon-o-academic-cap')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.graduates.index'))
                                ->url(GraduateResource::getUrl()),
                            NavigationItem::make('Prestasi')
                                ->icon('heroicon-o-trophy')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.achievements.index'))
                                ->url(AchievementResource::getUrl()),
                        ]),

                        NavigationGroup::make('Page Program')
                        ->items([
                            NavigationItem::make('Ekstrakurikuler')
                                ->icon('heroicon-o-beaker')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.eskuls.index'))
                                ->url(EskulResource::getUrl()),
                            NavigationItem::make('Kurikulum')
                                ->icon('heroicon-o-beaker')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.kurikulums.index'))
                                ->url(KurikulumResource::getUrl()),
                            NavigationItem::make('Point Kurikulum')
                                ->icon('heroicon-o-beaker')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.pointkurikulums.index'))
                                ->url(PointKurikulumResource::getUrl()),
                            NavigationItem::make('Struktur Pembelajaran')
                                ->icon('heroicon-o-beaker')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.strukturs.index'))
                                ->url(StrukturResource::getUrl()),
                            NavigationItem::make('Metode Pembelajaran')
                                ->icon('heroicon-o-beaker')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.metodes.index'))
                                ->url(MetodeResource::getUrl()),
                            NavigationItem::make('Kurikulum Khusus')
                                ->icon('heroicon-o-beaker')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.kuskurs.index'))
                                ->url(KuskurResource::getUrl()),
                            NavigationItem::make('Program Khusus')
                                ->icon('heroicon-o-beaker')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.programs.index'))
                                ->url(ProgramResource::getUrl()),
                            
                        ]),

                    NavigationGroup::make('Page Media')
                        ->items([
                            NavigationItem::make('Photo')
                                ->icon('heroicon-o-photo')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.photos.index'))
                                ->url(MediaFotoResource::getUrl()), 
                            NavigationItem::make('Video')
                                ->icon('heroicon-o-video-camera')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.videos.index'))
                                ->url(VideoResource::getUrl()),
                                NavigationItem::make('Medsos')
                                ->icon('heroicon-o-at-symbol')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.medsos.index'))
                                ->url(MediaSosialResource::getUrl()),
                            NavigationItem::make('Media Berita')
                            ->icon('heroicon-o-newspaper')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.mediaberitas.index'))
                            ->url(MediaBeritaResource::getUrl()),
                        ]),

                    NavigationGroup::make('Page Event')
                        ->items([
                            NavigationItem::make('Agenda')
                            ->icon('heroicon-o-clipboard-document-list')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.photos.index'))
                            ->url(KalenderResource::getUrl()), 
                            NavigationItem::make('Kalender Akademik')
                                ->icon('heroicon-o-calendar-date-range')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.videos.index'))
                                ->url(KalenderAkademikResource::getUrl()),
                    ]),


                    NavigationGroup::make('Page Kontak')
                        ->items([
                            NavigationItem::make('Kritik Dan Saran')
                            ->icon('heroicon-o-inbox-arrow-down')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.kontaks.index'))
                            ->url(KontakResource::getUrl()),
                            NavigationItem::make('Social Media')
                                ->icon('heroicon-o-qr-code')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.sosmeds.index'))
                                ->url(SosmedResource::getUrl()),
                            NavigationItem::make('Peta')
                                ->icon('heroicon-o-map-pin')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.petas.index'))
                                ->url(PetaResource::getUrl()),
                ]),
                        NavigationGroup::make('Page PPDB')
                        ->items([
                            NavigationItem::make('Point PPDB')
                            ->icon('heroicon-o-home')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.ppdb.index'))
                            ->url(PpdbResource::getUrl()), 
                            NavigationItem::make('Info PPDB')
                            ->icon('heroicon-o-book-open')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.infoppdbs.index'))
                            ->url(InfoppdbResource::getUrl()),
                            NavigationItem::make('Syarat PPDB')
                            ->icon('heroicon-o-question-mark-circle')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.syaratppdbs.index'))
                            ->url(SyaratppdbResource::getUrl()),
                            NavigationItem::make('Jadwal PPDB')
                            ->icon('heroicon-o-numbered-list')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.jadwalppdbs.index'))
                            ->url(JadwalppdbResource::getUrl()),
                            NavigationItem::make('Alur PPDB')
                            ->icon('heroicon-o-flag')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.alurppdbs.index'))
                            ->url(AlurppdbResource::getUrl()),
                    ]),
                ]);
            })
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
