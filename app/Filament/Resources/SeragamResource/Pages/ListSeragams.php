<?php

namespace App\Filament\Resources\SeragamResource\Pages;

use App\Filament\Resources\SeragamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeragams extends ListRecords
{
    protected static string $resource = SeragamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
