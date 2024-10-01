<?php

namespace App\Filament\Resources\InfoppdbResource\Pages;

use App\Filament\Resources\InfoppdbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInfoppdb extends EditRecord
{
    protected static string $resource = InfoppdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
