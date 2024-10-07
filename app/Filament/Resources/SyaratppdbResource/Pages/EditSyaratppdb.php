<?php

namespace App\Filament\Resources\SyaratppdbResource\Pages;

use App\Filament\Resources\SyaratppdbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSyaratppdb extends EditRecord
{
    protected static string $resource = SyaratppdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
