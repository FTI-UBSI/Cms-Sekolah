<?php

namespace App\Filament\Resources\MediaFotoResource\Pages;

use App\Filament\Resources\MediaFotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMediaFotos extends ListRecords
{
    protected static string $resource = MediaFotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
