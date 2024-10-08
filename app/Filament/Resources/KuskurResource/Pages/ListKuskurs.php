<?php

namespace App\Filament\Resources\KuskurResource\Pages;

use App\Filament\Resources\KuskurResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKuskurs extends ListRecords
{
    protected static string $resource = KuskurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
