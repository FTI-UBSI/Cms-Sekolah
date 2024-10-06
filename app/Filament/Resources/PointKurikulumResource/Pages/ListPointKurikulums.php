<?php

namespace App\Filament\Resources\PointKurikulumResource\Pages;

use App\Filament\Resources\PointKurikulumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPointKurikulums extends ListRecords
{
    protected static string $resource = PointKurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
