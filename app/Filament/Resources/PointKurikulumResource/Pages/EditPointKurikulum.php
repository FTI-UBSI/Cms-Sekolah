<?php

namespace App\Filament\Resources\PointKurikulumResource\Pages;

use App\Filament\Resources\PointKurikulumResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPointKurikulum extends EditRecord
{
    protected static string $resource = PointKurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
