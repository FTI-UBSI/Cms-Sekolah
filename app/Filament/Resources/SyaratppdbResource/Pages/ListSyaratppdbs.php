<?php

namespace App\Filament\Resources\SyaratppdbResource\Pages;

use App\Filament\Resources\SyaratppdbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSyaratppdbs extends ListRecords
{
    protected static string $resource = SyaratppdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
