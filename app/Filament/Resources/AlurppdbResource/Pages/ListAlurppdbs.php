<?php

namespace App\Filament\Resources\AlurppdbResource\Pages;

use App\Filament\Resources\AlurppdbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlurppdbs extends ListRecords
{
    protected static string $resource = AlurppdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
