<?php

namespace App\Filament\Resources\PhotoResource\Pages;

use App\Filament\Resources\PhotoResource;
use App\Models\Photo;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ListPhotos extends ListRecords
{
    protected static string $resource = PhotoResource::class;

    public $folder;

    protected function getHeaderActions(): array
    {
        $this->folder =Photo::find( request()->query('folder'));
        // dd($this->folder->id); // Mengambil query parameter
        if ($this->folder) {
            return [
                Action::make('kembali')
                ->label('Back')
                ->url(fn() => route('filament.admin.resources.photos.index')),
                Action::make('up0loadGambar')
                    ->label('Upload Gambar')
                    ->url(fn() => route('filament.admin.resources.photos.create', ['folder' => $this->folder->id])),
            ];
        }
        return [
            Actions\CreateAction::make()
            ->label('New Folder'),
        ];
    }
    public function getTitle(): string|Htmlable
    {
        if ($this->folder) {
            return $this->folder->title;
        }
        return 'Galeri Photo';
    }


}
