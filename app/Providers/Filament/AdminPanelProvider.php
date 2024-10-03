<?php

namespace App\Providers\Filament;

use App\Filament\Resources\AgendaResource;
use App\Filament\Resources\AlurppdbResource;
use App\Filament\Resources\AnnouncementResource;
use App\Filament\Resources\EducatorResource;
use App\Filament\Resources\ExtracurricularResource;
use App\Filament\Resources\MediaSosialResource;
use App\Filament\Resources\PhotoResource;
use App\Filament\Resources\FacilityResource;
use App\Filament\Resources\InfoppdbResource;
use App\Filament\Resources\InstagramPostResource;
use App\Filament\Resources\JadwalppdbResource;
use App\Filament\Resources\MediaBeritaResource;
use App\Filament\Resources\MediaFotoResource;
use App\Filament\Resources\MedsosResource;
use App\Filament\Resources\NewsResource;
use App\Filament\Resources\PpdbResource;
use App\Filament\Resources\ProbriResource;
use App\Filament\Resources\SeragamResource;
use App\Filament\Resources\SliderResource;
use App\Filament\Resources\SyaratppdbResource;
use App\Filament\Resources\TestimoniResource;
use App\Filament\Resources\VideoResource;
use App\Livewire\Auth\Login;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Pages\Dashboard;
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
                            NavigationItem::make('Ekstrakurikuler')
                                ->icon('heroicon-o-puzzle-piece')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.extracurriculars.index'))
                                ->url(ExtracurricularResource::getUrl()),
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
                            NavigationItem::make('Fasilitas')
                                ->icon('heroicon-o-building-office')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.facilities.index'))
                                ->url(FacilityResource::getUrl()),
                            NavigationItem::make('GTK')
                                ->icon('heroicon-o-user-group')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.educators.index'))
                                ->url(EducatorResource::getUrl()),
                        ]),

                    NavigationGroup::make('Page Program'),


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
                            NavigationItem::make('Namanya bebas')
                            ->icon('heroicon-o-photo')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.photos.index'))
                            ->url(PhotoResource::getUrl()), 
                            NavigationItem::make('Namanya bebas')
                                ->icon('heroicon-o-video-camera')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.videos.index'))
                                ->url(VideoResource::getUrl()),
                    ]),
                    NavigationGroup::make('Page Kontak')
                        ->items([
                            NavigationItem::make('Namanya bebas')
                            ->icon('heroicon-o-photo')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.photos.index'))
                            ->url(PhotoResource::getUrl()), 
                            NavigationItem::make('Namanya bebas')
                                ->icon('heroicon-o-video-camera')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.videos.index'))
                                ->url(VideoResource::getUrl()),
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
                            ->icon('heroicon-o-book-open')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.syaratppdbs.index'))
                            ->url(SyaratppdbResource::getUrl()),
                            NavigationItem::make('Jadwal PPDB')
                            ->icon('heroicon-o-book-open')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.jadwalppdbs.index'))
                            ->url(JadwalppdbResource::getUrl()),
                            NavigationItem::make('Alur PPDB')
                            ->icon('heroicon-o-book-open')
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
