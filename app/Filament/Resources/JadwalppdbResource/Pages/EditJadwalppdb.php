<?php

namespace App\Filament\Resources\JadwalppdbResource\Pages;

use App\Filament\Resources\JadwalppdbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalppdb extends EditRecord
{
    protected static string $resource = JadwalppdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
