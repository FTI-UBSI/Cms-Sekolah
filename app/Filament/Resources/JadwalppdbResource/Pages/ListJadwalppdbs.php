<?php

namespace App\Filament\Resources\JadwalppdbResource\Pages;

use App\Filament\Resources\JadwalppdbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalppdbs extends ListRecords
{
    protected static string $resource = JadwalppdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
