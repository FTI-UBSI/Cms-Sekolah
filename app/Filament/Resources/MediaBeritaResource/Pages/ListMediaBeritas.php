<?php

namespace App\Filament\Resources\MediaBeritaResource\Pages;

use App\Filament\Resources\MediaBeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMediaBeritas extends ListRecords
{
    protected static string $resource = MediaBeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
